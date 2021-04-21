<?php

namespace App\Models;

use App\Models\product;
use App\models\prd_ecommerceinventory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class prd_inventory extends Model
{
    protected $table = 'prd_inventory';
	protected $guarded = [];
    use SoftDeletes;

      public function product_name()
    {
        return $this->belongsTo(product::class, 'product_id');
    }

    public function ecommerce() 
    {
        return $this->hasMany(prd_ecommerceinventory::class, 'ec_id');
    }

}
