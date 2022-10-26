<?php

namespace App\Actions\Auth\Login;

use App\Services\Auth\LoginRateLimiter;
use App\Services\Server\Dto\Requests\LoginUserRequestDto;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;

class AttemptToAuthenticate
{

    protected StatefulGuard $guard;

    protected LoginRateLimiter $limiter;

    public function __construct(StatefulGuard $guard, LoginRateLimiter $limiter)
    {
        $this->guard = $guard;
        $this->limiter = $limiter;
    }

    public function handle(LoginUserRequestDto $dto, $next)
    {

        if ($this->guard->attempt(
            $dto->only('user,password')->toArray(),
            $dto->remember)
        ) {
            return $next($dto);
        }

        $this->throwFailedAuthenticationException($dto);
    }

    protected function throwFailedAuthenticationException(LoginUserRequestDto $dto)
    {
        $this->limiter->increment($dto);

        throw ValidationException::withMessages([
            Fortify::username() => [trans('auth.failed')],
        ]);
    }

}
