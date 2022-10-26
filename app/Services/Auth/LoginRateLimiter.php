<?php

namespace App\Services\Auth;

use App\Services\Server\Dto\Requests\LoginUserRequestDto;
use Illuminate\Cache\RateLimiter;
use Illuminate\Support\Str;

class LoginRateLimiter
{

    protected RateLimiter $limiter;

    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function attempts(LoginUserRequestDto $dto)
    {
        return $this->limiter->attempts($this->throttleKey($dto));
    }

    public function tooManyAttempts(LoginUserRequestDto $dto): bool
    {
        return $this->limiter->tooManyAttempts($this->throttleKey($dto), 5);
    }

    public function increment(LoginUserRequestDto $dto): void
    {
        $this->limiter->hit($this->throttleKey($dto), 60);
    }

    public function availableIn(LoginUserRequestDto $dto): int
    {
        return $this->limiter->availableIn($this->throttleKey($dto));
    }

    public function clear(LoginUserRequestDto $dto): void
    {
        $this->limiter->clear($this->throttleKey($dto));
    }

    protected function throttleKey(LoginUserRequestDto $dto): string
    {
        return Str::transliterate(Str::lower($dto->name.'|'.$dto->ip));
    }
}
