<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScentFamily extends Model
{
    use HasFactory;

    protected $fillable = [
        'scent1_id',
        'scent2_id',
        'scent3_id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scent1()
    {
        return $this->belongsTo(Scent::class, 'scent1_id');
    }

    public function scent2()
    {
        return $this->belongsTo(Scent::class, 'scent2_id');
    }

    public function scent3()
    {
        return $this->belongsTo(Scent::class, 'scent3_id');
    }
}
