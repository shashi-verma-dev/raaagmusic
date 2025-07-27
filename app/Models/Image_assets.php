<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_assets extends Model
{
    use HasFactory;
    protected $table = 'image_assets';

    protected $fillable = [
        'category_id', 'slug', 'name','zip_file','zip_file_size',  'description', 'stars',  'og_price', 'premium', 'tags', 'org_file', 'org_file_without_bg', 'resolution', 'size', 'other', 'status' , 'thumbnail_image',
    ];
}
