<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class smartphone extends Model
{
    protected $fillable = [
    	'name', 'price', 'stock'
    ];
}