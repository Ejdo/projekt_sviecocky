<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scent;

class ScentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Scent 1
        Scent::create([
            'name' => 'Coffee',
            'photo_path' => 'images/coffee.svg',
            'description' => 'Dominant note in mocha scented candles, providing a warm and energizing fragrance that can help stimulate the senses.',
        ]);

        // Scent 2
        Scent::create([
            'name' => 'Chocolate',
            'photo_path' => 'images/chocolate.svg',
            'description' => 'The sweet and indulgent scent of chocolate is another key component providing a rich and satisfying aroma',
        ]);

        // Scent 3
        Scent::create([
            'name' => 'Vanilla',
            'photo_path' => 'images/vanilla.svg',
            'description' => 'The subtle and comforting fragrance of vanilla is often added to mocha scented candles to provide a sweet and creamy base note,',
        ]);
    }
}
