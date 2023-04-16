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
            'scent1_id' => 1,
            'scent2_id' => 2,
            'scent3_id' => 3,
        ]);
    }
}
