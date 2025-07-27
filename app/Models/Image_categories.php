<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_categories extends Model
{
    use HasFactory;
    protected $table = 'image_categories';

    protected $fillable = [
         'slug', 'name', 'status','icon',
    ];
}
