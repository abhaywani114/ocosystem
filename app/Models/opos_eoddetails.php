<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_eoddetails extends Model
{
    protected $table = 'opos_eoddetails';
    use SoftDeletes;

    protected $guarded = [];

    public function opos_shiftdetails()
    {
    	return $this->hasMany('App\Models\opos_shiftdetails', 'eoddetails_id', 'id');
    }
}
