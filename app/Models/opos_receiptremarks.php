<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class opos_receiptremarks extends Model
{
    protected $table = 'opos_receiptremarks';
    protected $guarded = [];

    public function receipt(){
        return $this->belongsTo(opos_receipt::class);
    }
}
