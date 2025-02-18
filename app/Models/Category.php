<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // command line to create model : php artisan make:model ModelName (ModelName start with big letter and singular noun)
    public $timestamps = false;  // that table not using timestamps
    protected $table = 'categories';  // table that we've created
}
