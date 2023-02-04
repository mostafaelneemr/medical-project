<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [

        'description_ar',
        'description_en',
        'customer_name_ar',
        'customer_name_en',
        'image',
        'title_ar',
        'title_en',
        'button_ar',
        'button_en'
    ];
}
