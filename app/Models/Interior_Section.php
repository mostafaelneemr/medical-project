<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interior_Section extends Model
{
    use HasFactory;

    protected $table = 'interior_sections';

    protected $fillable = [

        'title_ar',
        'title_en',
        'subtitle_ar',
        'subtitle_en',
        'image',
        'interior_title_ar',
        'interior_title_en',
        'description_ar',
        'description_en',
        'button_ar',
        'button_en'
    ];
}
