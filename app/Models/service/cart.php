<?php

namespace App\Models\service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class cart extends Model
{
    use HasFactory;
    use Hastranslations;
    
    protected $table = 'carts';
    public $translatable = ['title', 'description'];
    protected $guarded = [''];
}
