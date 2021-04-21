<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_receiptdetails extends Model
{
    protected $table = 'opos_receiptdetails';
    use SoftDeletes;

    protected $guarded = [];

    public function opos_receipt()
    {
    	return $this->belongsTo('App\Models\opos_receipt', 'receipt_id', 'id');
    }
}
