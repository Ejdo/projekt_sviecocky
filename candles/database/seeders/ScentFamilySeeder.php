<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ScentFamily;

class ScentFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Scent Family
        ScentFamily::create([
            'scent_id' => 1,
            'product_id' =>1,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 2,
            'product_id' =>1,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 3,
            'product_id' =>1,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 1,
            'product_id' =>2,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 2,
            'product_id' =>2,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 3,
            'product_id' =>2,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 1,
            'product_id' =>3,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 2,
            'product_id' =>3,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 3,
            'product_id' =>3,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 1,
            'product_id' =>4,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 2,
            'product_id' =>4,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 3,
            'product_id' =>4,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 1,
            'product_id' =>5,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 2,
            'product_id' =>5,
        ]);

        // Scent Family
        ScentFamily::create([
            'scent_id' => 3,
            'product_id' =>5,
        ]);
    }
}
