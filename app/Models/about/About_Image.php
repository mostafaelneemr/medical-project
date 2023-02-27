<?php

namespace App\Models\about;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class About_Image extends Model
{
    use HasFactory;
    use Hastranslations;
    
    protected $table = 'about_images';
    public $translatable = ['title'];
    protected $guarded = [];
}
