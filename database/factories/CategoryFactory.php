<?php

namespace Quadrogod\Abc\Shop\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Quadrogod\Abc\Shop\Models\Category;

class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'name' => $name,
            'title' => $name,
            'url' => Str::uuid(),
            'display' => true,
            'text' => $this->faker->text(),
        ];
    }
}
