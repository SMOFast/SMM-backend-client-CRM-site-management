<?php

namespace App\Services\Server;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class PageService {

    function page(string $slug): Collection
    {
        return (new BaseApiService())->pages($slug);
    }

    function list(): Collection
    {
        return (new BaseApiService())->pages();

    }
}
