<?php

namespace App\Http\Controllers\Users;

use App\Actions\Auth\Login\AttemptToAuthenticate;
use App\Actions\Auth\Login\EnsureLoginIsNotThrottled;
use App\Actions\Auth\Login\PrepareAuthenticatedSession;
use App\Services\Client\Dto\LoginUserRequestClientDto;
use Illuminate\Routing\Pipeline;

class AuthController
{

    public function create()
    {
        return view('pages.auth.login');
    }

    public function store(LoginUserRequestClientDto $dto)
    {
        return $this->loginPipeline($dto)->then(function ($dto) {
            return response()->json([
                'user_id'      => \Auth::user()->id,
                'access_token' =>  \Auth::user()->createToken('auth_token')->plainTextToken,
                'token_type'   => 'Bearer',
            ]);
        });
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
