<?php

namespace Modules\Product\Tests;

use Illuminate\Database\Seeder;
use Modules\Product\Product;

class ProductSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->count(30)
            ->create();
    }
}
