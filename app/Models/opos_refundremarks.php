<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class opos_refundremarks extends Model
{
    protected $table = 'opos_refundremarks';
    protected $guarded = [];

    public function refund(){
        return $this->belongsTo(opos_refund::class);
    }
}
