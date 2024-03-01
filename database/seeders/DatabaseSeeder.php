<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Category\Tests\CategorySeeder;
use Modules\Product\Tests\ProductSeeder;
use Modules\User\Tests\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class
        ]);
    }
}
