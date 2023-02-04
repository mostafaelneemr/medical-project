<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class new_Update extends Model
{
    use HasFactory;

    protected $table = 'new_updates';

    protected $fillable = [
        'title_ar',
        'title_en',
        'image',
        'date',
        'description_ar',
        'description_en'
    ];
}
