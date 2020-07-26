<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
    	'name', 'smartphone_id'
    ];

    public function smartphone()
    {
    	return $this->belongsTo('App\Model\Smartphone');
    }
}