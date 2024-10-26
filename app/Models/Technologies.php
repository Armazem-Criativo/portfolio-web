<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technologies extends Model
{
    protected $fillable = [
        'lang',
        'image',
        'sort'
    ];
}