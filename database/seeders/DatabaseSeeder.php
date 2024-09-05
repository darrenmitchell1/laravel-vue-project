<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductCategory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        ProductCategory::factory()->create([
            'name' => 'Hats'
        ]);

        ProductCategory::factory()->create([
            'name' => 'Glasses'
        ]);

        ProductCategory::factory()->create([
            'name' => 'Clothing',
            'deleted_at' => Carbon::now()
        ]);

        ProductCategory::factory()->create([
            'name' => 'Shoes'
        ]);

        Product::factory()->create([
            'name' => 'Pork Pie',
            'code' => 'pork_pie',
            'product_category_id' => 1
        ]);

        Product::factory()->create([
            'name' => 'Sunnies',
            'code' => 'sunnies',
            'product_category_id' => 2,
            'deleted_at' => Carbon::now()
        ]);

        Product::factory()->create([
            'name' => 'Mod Suite',
            'code' => 'mod_suite',
            'product_category_id' => 3
        ]);

        Product::factory()->create([
            'name' => 'Black Shoes',
            'code' => 'blacl_shoes',
            'product_category_id' => 4
        ]);
    }
}
