<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    protected $fillable = [
        'category',
        'name',
        'description',
        'price'
    ];
}
