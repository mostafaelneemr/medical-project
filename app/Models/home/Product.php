<?php

namespace App\Models\home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use Hastranslations;

    protected $table = 'products';
    public $translatable = ['title'];
    protected $guarded = [];
}
