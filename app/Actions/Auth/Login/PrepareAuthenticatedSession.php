<?php

namespace App\Actions\Auth\Login;


use App\Services\Auth\LoginRateLimiter;

class PrepareAuthenticatedSession
{

    protected LoginRateLimiter $limiter;


    public function __construct(LoginRateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function handle($dto, $next)
    {
        session()->regenerate();

        $this->limiter->clear($dto);

        return $next($dto);
    }
}
