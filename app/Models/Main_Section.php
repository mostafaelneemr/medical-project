<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Main_Section extends Model
{
    use HasFactory;
    use Hastranslations;

    protected $table = 'main_section';
    public $translatable = ['title', 'subtitle', 'description','button'];
    protected $guarded = [];
}
