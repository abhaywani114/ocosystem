<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class merchantlocation extends Model
{
    protected $table = 'merchantlocation';
    protected $guarded = [];

    public function company()
    {
    	return $this->belongTo('App\Models\Company', 'merchant_id', 'id');
    }

    public function opos_locationterminals()
    {
    	return $this->hasMany('App\Models\opos_locationterminal', 'location_id', 'id');
    }

    public function location()
    {
    	return $this->belongsTo('App\Models\location', 'location_id', 'id');
    }
}
