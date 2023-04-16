<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scent;
use App\Models\Product;

class ScentFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = Product::find(1);
        $scents = Scent::whereIn('id', ['1', '2', '3'])->get();
        
        $product->scents()->attach($scents);
    }
}
