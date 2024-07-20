<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = ['title', 'content', 'category_id', 'user_id ']; // define the columns that can be mass assigned
}
