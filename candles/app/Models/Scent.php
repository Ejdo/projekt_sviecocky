<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scent extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'img',
        'description',
    ];

    public function scentFamilies()
    {
        return $this->belongsToMany(Product::class);
    }
}
