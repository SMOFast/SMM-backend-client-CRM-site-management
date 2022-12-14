<?php

namespace App\Services\Server;
use App\Services\Server\Exceptions\ErrorResponseException;
use App\Services\Server\Exceptions\UnexpectedResponseException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class OrderService
{
    /**
     * @throws UnexpectedResponseException
     * @throws ErrorResponseException
     */
    function create(int $productId, int $count): Collection
    {

        if (config('api_cache_enabled', 0) === 1) {

        } else {
        }

    }

}
