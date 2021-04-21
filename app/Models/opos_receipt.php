<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_receipt extends Model
{
    protected $table = 'opos_receipt';
    use SoftDeletes;

    protected $guarded = [];

    public function opos_locationterminal()
    {
    	return $this->belongsTo('App\Models\opos_locationterminal', 'terminal_id', 'terminal_id');
    }

    public function opos_receiptdetails()
    {
    	return $this->hasMany('App\Models\opos_receiptdetails', 'receipt_id', 'id');
    }
}
