<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_Section extends Model
{
    use HasFactory;

    protected $table = 'image_sections';

    protected $fillable = [
        'image',
        'title_ar',
        'title_en',
        'button_ar',
        'button_en'
    ];
}
