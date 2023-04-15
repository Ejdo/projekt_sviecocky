<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img',
        'description',
    ];

    public function scentFamilies()
    {
        return $this->hasMany(ScentFamily::class);
    }
}
