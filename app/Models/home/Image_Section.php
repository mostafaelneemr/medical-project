<?php

namespace App\Models\home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Image_Section extends Model
{
    use HasFactory;
    use Hastranslations;

    protected $table = 'image_sections';
    public $translatable = ['title','button'];
    protected $guarded = [];
}
