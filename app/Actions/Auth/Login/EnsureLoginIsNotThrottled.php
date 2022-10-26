<?php

namespace App\Actions\Auth\Login;

use App\Services\Auth\LoginRateLimiter;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;

class EnsureLoginIsNotThrottled
{

    protected LoginRateLimiter $limiter;


    public function __construct(LoginRateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function handle($dto, $next)
    {
        if (! $this->limiter->tooManyAttempts($dto)) {
            return $next($dto);
        }

        return with($this->limiter->availableIn($dto), function ($seconds) {
            throw ValidationException::withMessages([
                Fortify::username() => [
                    trans('auth.throttle', [
                        'seconds' => $seconds,
                        'minutes' => ceil($seconds / 60),
                    ]),
                ],
            ])->status(Response::HTTP_TOO_MANY_REQUESTS);
        });

    }
}
