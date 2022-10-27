<?php

namespace App\Services;

use App\Services\Server\CategoryService;
use Illuminate\Support\Facades\View;

class DefaultViewService
{
    function __construct()
    {
        View::share('categories', app(CategoryService::class)->list());
    }
}
