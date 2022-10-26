<?php

namespace App\Http\Controllers\Users;

use App\Actions\Auth\Login\AttemptToAuthenticate;
use App\Actions\Auth\Login\EnsureLoginIsNotThrottled;
use App\Actions\Auth\Login\PrepareAuthenticatedSession;
use App\Services\Server\Dto\Requests\LoginUserRequestDto;
use App\Services\Server\Dto\Responses\LoginUserResponseDto;
use Illuminate\Routing\Pipeline;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use Laravel\Fortify\Contracts\LoginResponse;
use Laravel\Fortify\Features;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;

class AuthController
{

    public function create()
    {
        return view('pages.auth.login');
    }

    public function store(LoginUserRequestDto $dto)
    {
        return $this->loginPipeline($dto)->then(function ($dto) {
            return app(LoginUserResponseDto::class);
        });
    }

    protected function loginPipeline(LoginUserRequestDto $dto)
    {

        return (new Pipeline(app()))->send($dto)->through(array_filter([
            EnsureLoginIsNotThrottled::class,
            AttemptToAuthenticate::class,
//            Features::enabled(Features::twoFactorAuthentication()) ? RedirectIfTwoFactorAuthenticatable::class : null,
            PrepareAuthenticatedSession::class,
        ]));
    }
}
