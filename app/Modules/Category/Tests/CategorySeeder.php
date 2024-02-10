<?php

namespace Modules\Category\Tests;

use Illuminate\Database\Seeder;
use Modules\Category\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
            ->count(10)
            ->create();
    }
}
