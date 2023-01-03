<?php

namespace App\Services\Auth;

use App\Actions\Auth\Login\AttemptToAuthenticate;
use App\Actions\Auth\Login\EnsureLoginIsNotThrottled;
use App\Actions\Auth\Login\PrepareAuthenticatedSession;
use App\Models\User;
use App\Services\Client\Dto\LoginUserRequestClientDto;
use App\Services\Client\Dto\RegisterUserRequestClientDto;
use App\Services\Server\BaseApiService;
use App\Services\Server\Dto\Requests\RegisterUserRequestDto;
use Illuminate\Routing\Pipeline;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

class UsersService
{

    public function auth(LoginUserRequestClientDto $dto)
    {
        return $this->loginPipeline($dto)->then(function ($dto) {
            return response()->json([
                'user_id'      => \Auth::user()->id,
                'access_token' =>  \Auth::user()->createToken('auth_token')->plainTextToken,
                'token_type'   => 'Bearer',
            ]);
        });
    }
    public function registerUser(RegisterUserRequestClientDto $dto): void {
        try {
            if (User::query()->where(['email'=>$dto->email])->exists()) {
                throw new \RuntimeException(__('auth.user_exists'));
            }

            DB::transaction(function () use ($dto) {
                $user = new User();
                $user->name = $dto->email;
                $user->email = $dto->email;
                $user->password = Hash::make($dto->password);

                $user->save();

                try {
                    $dto = (new RegisterUserRequestDto($user->makeVisible('password')->toArray()));
                    $serverUser = app(BaseApiService::class)->registerUser($dto);
                } catch (Throwable $e) {
                    throw new \RuntimeException($e->getMessage());
                }

                $user->server_user_id = $serverUser->user_id;
                $user->server_user_token = $serverUser->access_token;

                $user->save();

                return $user;
            });
        } catch (Throwable $e) {
            throw new \RuntimeException($e->getMessage());
        }
    }

    protected function loginPipeline(LoginUserRequestClientDto $dto)
    {

        return (new Pipeline(app()))->send($dto)->through(array_filter([
            EnsureLoginIsNotThrottled::class,
            AttemptToAuthenticate::class,
            //            Features::enabled(Features::twoFactorAuthentication()) ? RedirectIfTwoFactorAuthenticatable::class : null,
            PrepareAuthenticatedSession::class,
        ]));
    }
}
