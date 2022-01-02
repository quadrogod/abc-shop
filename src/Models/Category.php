<?php

namespace Quadrogod\Abc\Shop\Models;

use Illuminate\Database\Eloquent\Model;
use Quadrogod\Abc\Core\Models\Traits\HasVisibility;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Quadrogod\Abc\Shop\Database\Factories\CategoryFactory;

class Category extends Model
{
    use HasVisibility, HasFactory;

    protected $table = 'shop_categories';

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected static function newFactory()
    {
        return CategoryFactory::new();
    }
}