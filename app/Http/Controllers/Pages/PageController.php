<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Services\Server\BaseApiService;
use App\Services\Server\CategoryService;
use App\Services\Server\PageService;
use App\Services\Server\ProductService;
use Illuminate\Http\Request;

class PageController extends Controller {

    public function page(string $page)
    {

        $pages = (new PageService())->page($page);

        return view('pages.page', ['page' => $pages[0]]);
    }

}
