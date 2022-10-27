<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Services\Client\Dto\RegisterUserRequestClientDto;
use App\Services\Server\BaseApiService;
use App\Services\Server\Dto\Requests\RegisterUserRequestDto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

class RegisterController
{

    public function create()
    {
        return view('pages.auth.register');
    }

    /**
     * @throws \Throwable
     */
    public function store(RegisterUserRequestClientDto $dto)
    {

        DB::transaction(function () use ($dto) {
            $user           = new User();
            $user->name     = $dto->email;
            $user->email    = $dto->email;
            $user->password = Hash::make($dto->password);

            $user->save();

            try {
                $dto        = (new RegisterUserRequestDto($user->makeVisible('password')->toArray()));
                $serverUser = app(BaseApiService::class)->registerUser($dto);
            } catch (Throwable $e) {
                throw new \RuntimeException($e->getMessage());
            }

            $user->server_user_id    = $serverUser->user_id;
            $user->server_user_token = $serverUser->access_token;

            $user->save();

            return $user;
        });

    }

}
