<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Customer extends Model
{
    use HasFactory;
    use Hastranslations;
    
    protected $table = 'customers';
    public $translatable = ['title', 'customer_name', 'description'];
    protected $guarded = [];
}
