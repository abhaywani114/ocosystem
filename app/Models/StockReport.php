<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockReport extends Model
{
    protected $table = 'stockreport';
    use SoftDeletes;

    protected $guarded = [];
    
    public function product()
    {
        return $this->belongsTo('App\Models\product');
    }
    public function location()
    {
        return $this->belongsTo('App\Models\location');
    }
    public function remark(){
        return $this->hasOne('App\Models\stockreportremarks','stockreport_id');
    }
}
