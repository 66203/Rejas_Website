<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fragrance extends Model
{
    protected $fillable = [
        'fragrance_name',
        'fragrance_description',
        'gender',
        'ingredients',
        'quantity',
        'price',
        'image',
        'image2',
        'image3',
        'image4',
    ];
}
