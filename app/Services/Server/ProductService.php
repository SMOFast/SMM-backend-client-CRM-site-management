<?php

namespace App\Services\Server;
use App\Services\Server\Exceptions\ErrorResponseException;
use App\Services\Server\Exceptions\UnexpectedResponseException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class ProductService
{
    /**
     * @throws UnexpectedResponseException
     * @throws ErrorResponseException
     */
    function list($category = null): Collection
    {

        if (config('api_cache_enabled', 0) === 1) {
            $cacheKey = 'products';
            if ($category ?? null) {
                $cacheKey .= '-category-'.$category['id'];
            }
            return Cache::rememberForever($cacheKey, function () use ($category) {
                return (new BaseApiService())->products($category['id']);
            });
        } else {
            return (new BaseApiService())->products($category['id']);
        }

    }

    /**
     * @throws UnexpectedResponseException
     * @throws ErrorResponseException
     */
    function product(int $productId)
    {
        if (config('api_cache_enabled', 0) === 1) {
            return Cache::rememberForever('products-'.$productId, function () use ($productId) {
                return (new BaseApiService())->products(productId: $productId);
            });
        } else {
            return (new BaseApiService())->products(productId: $productId);
        }
    }
}
