<?php

namespace App\Models\service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class service extends Model
{
    use HasFactory;
    use Hastranslations;
    
    protected $table = 'services';
    public $translatable = ['head', 'title', 'description'];
    protected $guarded = [''];
}





?>