<?php

namespace Modules\Category\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Category\Category;
use Modules\User\User;

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
        return [
            'name' => $this->faker->jobTitle(),
            'description' => $this->faker->text(),
            'slug' => $this->faker->name(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
