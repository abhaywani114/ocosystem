<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\OgFuel;
use App\Models\prd_inventory;

class product extends Model
{
    protected $table = 'product';
     protected $guarded = [];
    use SoftDeletes;
    
    
	public function og_fuel()
    {
        return $this->hasOne(OgFuelPrice::class,'product_id');
    }

    public function inventory()
    {
        return $this->hasOne(prd_inventory::class,'product_id');
    }
}
