<?php

namespace Quadrogod\Abc\Shop;

use Illuminate\Support\Facades\Route;
use Quadrogod\Abc\Pages\Interfaces\IModule;
use Quadrogod\Abc\Pages\Interfaces\IPage;
use Quadrogod\Abc\Shop\Controllers\ShopController;

class ShopModule implements IModule
{
    public function registerRoutes(IPage $page)
    {
        $base_url = '/' . $page->getUrl();
        Route::get($base_url, [ShopController::class, 'index'])->name($page->getUniqueRouteName());
        // example
//        Route::get("$base_url/category/{category:url}", [ShopController::class, 'category'])->name('shop.category');
        Route::get("$base_url/category/{category}", [ShopController::class, 'category'])->name('shop.category');
        Route::get("$base_url/product/{product}", [ShopController::class, 'product'])->name('shop.product');
    }
}
