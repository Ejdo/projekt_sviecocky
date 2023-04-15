<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScentFamily extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'scent_families';

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
        return $this->belongsTo(ScentType::class, 'scent1_id');
    }

    public function scent2()
    {
        return $this->belongsTo(ScentType::class, 'scent2_id');
    }

    public function scent3()
    {
        return $this->belongsTo(ScentType::class, 'scent3_id');
    }
}
