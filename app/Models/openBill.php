<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class openBill extends Model
{
    protected $table = 'plat_openbill';
    protected $guarded = [];
    use SoftDeletes;

    public function openBill()
    {
        return $this->hasMany(openBillProduct::class,'openbill_id');
    }
    public function ftype(){
        return $this->hasOne(oposFtype::class, 'ftype_id');
    }
}
