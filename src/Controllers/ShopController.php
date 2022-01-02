<?php

namespace Quadrogod\Abc\Shop\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Quadrogod\Abc\Shop\Models\Category;
use Quadrogod\Abc\Shop\Models\Product;
use Quadrogod\Abc\Pages\Models\Page;

class ShopController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Page $page)
    {
        return view('shop::index');
    }

    public function category(Category $category, Request $request)
    {
        return view('shop::category', compact(['category']));
    }

    public function product(Product $product, Request $request)
    {
        return view('shop::product', compact(['product']));
    }

    public function nested(Category $category, Product $product, Request $request)
    {
        return view('shop::product', compact(['category', 'product']));
    }
}
