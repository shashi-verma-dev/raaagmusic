<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website_status extends Model
{
    use HasFactory;
    protected $table = "website_status";

    protected $fillable = [
        'status',
        'note',
    ];


}
