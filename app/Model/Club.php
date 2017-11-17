<?php

namespace App\Model;

use App\Model\Activity;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
    	'name',
        'contract_name',
        'description',
        'user_id',
        'creation_date',
        'background_path',
        'icon_path',
        'short_name',
        'address',
        'house_nr',
        'zipcode',
        'city',
        'invoice_address',
        'invoice_house_nr',
        'invoice_zipcode',
        'invoice_city',
        'email',
        'phone',
    ];

    public function activities ()
    {
    	return $this->hasMany(Activity::class);
    }
}
