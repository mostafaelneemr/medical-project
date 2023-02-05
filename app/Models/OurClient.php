<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClient extends Model
{
    use HasFactory;

    protected $table = 'ourclients';

    protected $fillable = [
        'title_ar',
        'title_en',
        'image',
        'company_name_ar',
        'company_name_en'
    ];
}