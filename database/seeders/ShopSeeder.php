<?php

namespace Quadrogod\Abc\Shop\Database\Seeders;

use Illuminate\Database\Seeder;
use Quadrogod\Abc\Shop\Models\Category;
use Quadrogod\Abc\Shop\Models\Product;
use Quadrogod\Abc\Pages\Models\Page;

class ShopSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name' => 'Shop Page',
            'title' => 'Shop Page',
            'url' => 'shop',
            'route_name' => 'shop.index',
            'module' => 'Quadrogod\\Abc\\Shop\\ShopModule',
            'display' => true,
            'menu1' => true,
            'parent' => 0,
            'left_key' => 5,
            'right_key' => 6,
            'level' => 1,
        ]);
        //
        Product::factory()
            ->count(3)
            ->for(Category::factory()->create())
            ->create();
        Product::factory()
            ->count(2)
            ->for(Category::factory()->create())
            ->create();
    }
}
