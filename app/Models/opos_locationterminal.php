<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_locationterminal extends Model
{
    protected $table = 'opos_locationterminal';
    use SoftDeletes;

    protected $guarded = [];

    public function product_name()
    {
        return $this->belongsTo(product::class,'product_id');
    }

    public function merchantlocation()
    {
    	return $this->belongTo('App\Models\merchantlocation', 'location_id', 'id');
    }

    public function opos_receipts()
    {
    	return $this->hasMany('App\Models\opos_receipt', 'terminal_id', 'terminal_id');
    }
}
