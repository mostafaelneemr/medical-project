<?php

namespace App\Models\about;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class help extends Model
{
    use HasFactory;
    use Hastranslations;
    
    protected $table = 'helps';
    public $translatable = ['title', 'sub_title', 'head', 'description'];
    protected $guarded = [];
}
