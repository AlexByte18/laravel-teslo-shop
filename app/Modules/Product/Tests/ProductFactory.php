<?php

namespace Modules\Product\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Category\Category;
use Modules\Product\Product;

class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomNumber(2),
            'slug' => $this->faker->name(),
            'stock' => $this->faker->randomNumber(2),
            'sizes' => $this->faker->randomElements(['S', 'M', 'G', 'EG'], 2),
            'images' => ['product.jpg'],
            'category_id' => 1,
        ];
    }
}
