<?php

namespace App\Services\Server;
use Illuminate\Support\Facades\Cache;

class CategoryService
{
    function list()
    {
        return Cache::get('categories', function () {
            return (new BaseApiService())->categories();
        });
    }
}
