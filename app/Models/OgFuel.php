<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\OgFuelPrice;

class OgFuel extends Model
{
    protected $table = 'prd_ogfuel';
    protected $guarded = [];
    use SoftDeletes;

	public function product_name()
    {
        return $this->belongsTo(product::class,'product_id');
    }
	public function og_fuel_price()
    {
        return $this->hasOne(OgFuelPrice::class,'ogfuel_id');
    }
}
