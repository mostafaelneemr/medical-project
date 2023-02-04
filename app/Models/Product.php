<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title_ar',
        'title_en',
        'image',
        'title_des_ar',
        'title_des_en',
        'price_ar',
        'price_en'
    ];
}
