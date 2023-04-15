<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'ean_code',
        'name',
        'description',
        'ingredients',
        'price',
        'burn_hours',
        'discount',
        'stock',
        'brand_id',
        'type_id',
        'scent_family_id',
        'color_id',
        'photo_id',
        'trending',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function scentFamily()
    {
        return $this->belongsTo(ScentFamily::class);
    }


}
