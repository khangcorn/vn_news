<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';

    protected $primaryKey = 'id';
    protected $imcreamenting = false;
     protected $fillable = 
    [
    'img_name',
    'url_image',

    'new_id',
 
    ];
 
 
}

