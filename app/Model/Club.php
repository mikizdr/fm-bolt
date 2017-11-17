<?php

namespace App\Model;

use App\Model\Activity;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //

    public function activities ()
    {
    	return $this->hasMany(Activity::class);
    }
}
