<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class OurClient extends Model
{
    use HasFactory;
    use Hastranslations;

    protected $table = 'ourclients';
    public $translatable = ['head','name','title_name'];
    protected $guarded = [];
}
