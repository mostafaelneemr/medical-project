<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory;
    use Hastranslations;

    protected $table = 'sliders';
    public $translatable = ['title', 'sub_title', 'button'];
    protected $guarded = [];
}
