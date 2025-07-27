<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $table = 'settings';

    protected $fillable = [
         'email1', 'email2', 'number1', 'number2', 'address', 'timing', 'insta_link', 'x_link', 'pinterest_link',
          'fb_link', 'linkedin_link',
    ];
}
