<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductType;
use App\Models\ProductCategory;
use App\Models\ScentFamily;
use App\Models\ScentType;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Brand modedl
        Brand::create([
            'name' => 'Candle CO',
            'description' => 'Very good candles from Sweden',
        ]);

        //Category
        ProductCategory::create([
            'name' => 'Candles',
            'description' => 'Things that burns',
        ]);

        // Type
        ProductType::create([
            'name' => 'Aroma',
            'description' => 'Medium Aromatic candle',
        ]);

        

        // Scent 1
        ScentType::create([
            'name' => 'Coffee',
            'photo_path' => 'coffee.svg',
            'description' => 'Dominant note in mocha scented candles, providing a warm and energizing fragrance that can help stimulate the senses.',
        ]);

        // Scent 2
        ScentType::create([
            'name' => 'Chocolate',
            'photo_path' => 'chocolate.svg',
            'description' => 'The sweet and indulgent scent of chocolate is another key component providing a rich and satisfying aroma',
        ]);

        // Scent 3
        ScentType::create([
            'name' => 'Vanilla',
            'photo_path' => 'vanilla.svg',
            'description' => 'The subtle and comforting fragrance of vanilla is often added to mocha scented candles to provide a sweet and creamy base note,',
        ]);

        // Scent Family
        ScentFamily::create([
            'scent1_id' => 1,
            'scent2_id' => 2,
            'scent3_id' => 3,
        ]);

        // Product using the Product model
        Product::create([
            'category_id' => 1,
            'ean_code' => '1234567890123',
            'name' => 'Mocha Travel Candle',
            'description' => "Our scented candle with mocha fragrance is the perfect addition to any room, filling it with a warm and inviting aroma that will make you feel right at home. Made with high-quality essential oils and natural soy wax, this candle is long-lasting and eco-friendly, so you can enjoy the rich scent without worrying about harmful chemicals or pollutants. With a burn time of up to 50 hours, this candle will keep your home smelling delicious for days on end, providing a cozy and comforting ambiance that's perfect for relaxing evenings at home.",
            'ingredients' => '100% soy wax made in the USA, FSC-certified wood wick, and fragrance oils (paraben-free, phthalate-free, vegan and cruelty-free)',
            'price' => 28.00,
            'discount' => 0.0,
            'stock' => 10,
            'burn_hours' => 8,
            'brand_id' => 1,
            'type_id' => 1,
            'scent_family_id' => 1,
            'color' => "white",
            'photo_path' => "../../../images/candle5.jpg",
            'trending' => true,
        ]);
        

    }
}
