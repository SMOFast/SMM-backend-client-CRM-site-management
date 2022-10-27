<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Services\Server\BaseApiService;
use App\Services\Server\CategoryService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @throws \App\Services\Server\Exceptions\UnexpectedResponseException
     * @throws \App\Services\Server\Exceptions\ErrorResponseException
     */
    public function __invoke()
    {
        return view('pages.index', [
            'categories' => app(CategoryService::class)->list(),
        ]);
    }
}
