<?php

namespace App\Models\service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Interior_Section extends Model
{
    use HasFactory;
    use Hastranslations;

    protected $table = 'interior_sections';
    public $translatable = ['head', 'sub_head', 'interior_title','description', 'button'];
    protected $guarded = [];
}
