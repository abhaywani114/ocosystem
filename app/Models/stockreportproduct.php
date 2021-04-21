<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class stockreportproduct extends Model
{
    protected $table = 'stockreportproduct';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(product::class, 'product_id');
    }
    public function stock_report(){
        return $this->belongsTo('App\Models\StockReport','stockreport_id');
    }
}
