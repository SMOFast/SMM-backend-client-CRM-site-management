<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Services\Server\BaseApiService;
use App\Services\Server\CategoryService;
use App\Services\Server\ProductService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @throws \App\Services\Server\Exceptions\UnexpectedResponseException
     * @throws \App\Services\Server\Exceptions\ErrorResponseException
     */
    public function __invoke()
    {
        return view('pages.page');
    }

}
