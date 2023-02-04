<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Section extends Model
{
    use HasFactory;

    protected $table = 'main_section';

    protected $fillable  = [
        'image',
        'title_ar',
        'title_en',
        'subtitle_ar',
        'subtitle_en',
        'title_details_ar',
        'title_details_en',
        'button_ar',
        'button_en'
    ];
}
