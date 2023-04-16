<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        (new BrandSeeder)->run();
        (new ScentSeeder)->run();
        (new ScentFamilySeeder)->run();
        (new ProductTypeSeeder)->run();
        (new ProductCategorySeeder)->run();
        (new ProductSeeder)->run();
        (new UserSeeder)->run();

    }
}
