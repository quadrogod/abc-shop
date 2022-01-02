<?php

namespace Quadrogod\Abc\Shop\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Quadrogod\Abc\Shop\Models\Category;
use Quadrogod\Abc\Shop\Models\Product;
use Quadrogod\Abc\Pages\Models\Page;

class ShopController extends BaseController
{
    public function index(Page $page)
    {
        return view('shop::index');
    }

    public function category(Category $category, Request $request)
    {
        return view('shop::category', ['category' => $category]); // or ->with(compact(['category']));
    }

    public function product(Product $product, Request $request)
    {
        return view('shop::product', ['product' => $product]);
    }
}
