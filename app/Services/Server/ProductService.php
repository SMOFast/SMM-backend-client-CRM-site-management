<?php

namespace App\Services\Server;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class ProductService
{
    function list($category = null): Collection
    {

        $cacheKey = 'products';
        if ($category ?? null) {
            $cacheKey .= '-category-'.$category['id'];
        }
        return Cache::rememberForever($cacheKey, function () use ($category) {
            return (new BaseApiService())->products($category['id']);
        });
    }
}
