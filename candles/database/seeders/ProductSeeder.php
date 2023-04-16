<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  

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
            'burn_hours' => 50,
            'brand_id' => 2,
            'type_id' => 1,
            'color' => "brown",
            'photo_path' => "images/candle5.jpg",
            'trending' => false,
        ]);

        Product::create([
            'category_id' => 1,
            'ean_code' => '1234567890123',
            'name' => 'Lime & Sweet Fig Candle',
            'description' => "Introducing our lime and sweet fig scented candle, a delightful addition to any living space that is sure to create a warm and inviting atmosphere. Infused with the sweet and tangy aroma of lime and the subtle sweetness of fig, this candle will transport you to a tropical paradise, enveloping your senses with a deliciously refreshing fragrance. With its beautiful and soothing scent, this candle is perfect for unwinding after a long day, creating a cozy and comfortable ambiance for relaxing evenings at home.",
            'ingredients' => '100% soy wax made in the USA, FSC-certified wood wick, and fragrance oils (paraben-free, phthalate-free, vegan and cruelty-free)',
            'price' => 20.00,
            'discount' => 0.0,
            'stock' => 20,
            'burn_hours' => 40,
            'brand_id' => 1,
            'type_id' => 1,
            'color' => "white",
            'photo_path' => 'images/candle3.jpg',
            'trending' => true,
        ]);

        Product::create([
            'category_id' => 1,
            'ean_code' => '1234567890123',
            'name' => 'Spiced Orange Candle',
            'description' => "Introducing our spiced orange scented candle, a perfect addition to any room that will infuse your living space with a warm and inviting aroma, evoking memories of cozy winter nights spent by the fire. With a delightful blend of spicy cinnamon and sweet orange, this candle will create an uplifting and comforting atmosphere that will make you feel right at home. Light up this spiced orange scented candle to create a cozy ambiance that is perfect for unwinding after a long day or creating a warm and inviting atmosphere for entertaining guests.",
            'ingredients' => '100% soy wax made in the USA, FSC-certified wood wick, and fragrance oils (paraben-free, phthalate-free, vegan and cruelty-free)',
            'price' => 25.00,
            'discount' => 0.0,
            'stock' => 10,
            'burn_hours' => 40,
            'brand_id' => 1,
            'type_id' => 1,
            'color' => "white",
            'photo_path' => "images/candle2.jpg",
            'trending' => true,
        ]);

        Product::create([
            'category_id' => 1,
            'ean_code' => '1234567890123',
            'name' => 'Aloe Vera Candle',
            'description' => "Aloe Vera scented candle will refresh and calm any room, bringing the healing properties of this plant into your living space. The subtle and soothing fragrance of Aloe Vera will transport you to a tranquil oasis, creating a peaceful atmosphere that will help you relax and unwind after a long day. Light up this Aloe Vera scented candle to create a spa-like ambiance, perfect for meditation, yoga, or unwinding after a hectic day. The therapeutic properties of Aloe Vera promote relaxation and reduce stress, making it an excellent choice for anyone looking to create a peaceful and rejuvenating environment in their living space.",
            'ingredients' => '100% soy wax made in the USA, FSC-certified wood wick, and fragrance oils (paraben-free, phthalate-free, vegan and cruelty-free)',
            'price' => 30.00,
            'discount' => 0.0,
            'stock' => 10,
            'burn_hours' => 40,
            'brand_id' => 1,
            'type_id' => 1,
            'color' => "white",
            'photo_path' => "images/candle1.jpg",
            'trending' => true,
        ]);


        Product::create([
            'category_id' => 1,
            'ean_code' => '1234567890123',
            'name' => 'Black Cherry Candle',
            'description' => "Indulge in the rich and delicious aroma of our Black Cherry scented candle, a perfect addition to any room that will fill your living space with the sweet and fruity fragrance of ripe black cherries. The enticing scent of this candle will create a warm and inviting ambiance, making you feel like you're in a cherry orchard on a sunny summer day. Light up this Black Cherry scented candle to create a cozy and romantic atmosphere, perfect for date nights, dinner parties, or simply enjoying a good book with a glass of wine. The sweet and fruity fragrance of ripe black cherries is sure to awaken your senses and create a joyful and uplifting mood.",
            'ingredients' => '100% soy wax made in the USA, FSC-certified wood wick, and fragrance oils (paraben-free, phthalate-free, vegan and cruelty-free)',
            'price' => 28.00,
            'discount' => 0.0,
            'stock' => 10,
            'burn_hours' => 8,
            'brand_id' => 1,
            'type_id' => 1,
            'color' => "white",
            'photo_path' => "images/candle4.jpg",
            'trending' => true,
        ]);
        
    }
}
