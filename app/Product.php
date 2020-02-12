<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'Description',
        'phone',
        'email',
        'categories',
        'image',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
    ];

    // public $table = 'Products';
}
