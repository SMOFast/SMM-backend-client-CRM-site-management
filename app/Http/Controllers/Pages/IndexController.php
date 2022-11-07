<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Services\Server\BaseApiService;
use App\Services\Server\CategoryService;
use App\Services\Server\ProductService;
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

    public function products($category, $subcategory)
    {
        $categories = app(CategoryService::class)->list();

        $category = $categories->where('slug', $subcategory)->firstOrFail();

        return view('pages.sub_category', [
            'products'        => app(ProductService::class)->list($category),
            'currentCategory' => $category,
            'categories'      => app(CategoryService::class)->list(),
        ]);

    }
}
