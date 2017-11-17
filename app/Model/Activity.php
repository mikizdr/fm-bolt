<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function club ()
    {
    	return $this->belongsTo(Product::class);
    }
}
