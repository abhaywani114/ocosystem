<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_receiptproduct extends Model
{
    protected $table = 'opos_receiptproduct';
    use SoftDeletes;

    protected $guarded = [];

    public function item_details()
    {
        return $this->hasOne(opos_itemdetails::class,'receiptproduct_id');
    }

    public function special()
    {
        return $this->hasMany(opos_receiptproductspecial::class,'receiptproduct_id');
    }

    public function receipt(){
        return $this->belongsTo(opos_receipt::class);
    }

    public function product(){
        return $this->belongsTo(product::class);
    }
}
