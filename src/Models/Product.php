<?php

namespace Quadrogod\Abc\Shop\Models;

use Illuminate\Database\Eloquent\Model;
use Quadrogod\Abc\Core\Models\Traits\HasVisibility;
use Quadrogod\Abc\Shop\Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasVisibility, HasFactory;

    protected $table = 'shop_products';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected static function newFactory()
    {
        return ProductFactory::new();
    }
}