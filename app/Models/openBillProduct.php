<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class openBillProduct extends Model
{
    protected $table = 'plat_openbillproduct';
    protected $guarded = [];
    use SoftDeletes;

    public function openBill()
    {
        return $this->belongsTo(openBill::class,'openbill_id');
    }
}
