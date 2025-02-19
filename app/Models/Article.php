<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    //  timestamps default is true 
    use HasFactory;  // create factory for articles
    protected $table = 'articles';
}
