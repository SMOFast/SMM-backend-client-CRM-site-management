<?php

namespace App\Services\Auth;

use App\Services\Client\Dto\LoginUserRequestClientDto;
use Illuminate\Cache\RateLimiter;
use Illuminate\Support\Str;

class LoginRateLimiter
{

    protected RateLimiter $limiter;

    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function attempts(LoginUserRequestClientDto $dto)
    {
        return $this->limiter->attempts($this->throttleKey($dto));
    }

    public function tooManyAttempts(LoginUserRequestClientDto $dto): bool
    {
        return $this->limiter->tooManyAttempts($this->throttleKey($dto), 5);
    }

    public function increment(LoginUserRequestClientDto $dto): void
    {
        $this->limiter->hit($this->throttleKey($dto), 60);
    }

    public function availableIn(LoginUserRequestClientDto $dto): int
    {
        return $this->limiter->availableIn($this->throttleKey($dto));
    }

    public function clear(LoginUserRequestClientDto $dto): void
    {
        $this->limiter->clear($this->throttleKey($dto));
    }

    protected function throttleKey(LoginUserRequestClientDto $dto): string
    {
        return Str::transliterate(Str::lower($dto->email.'|'.$dto->ip));
    }
}
