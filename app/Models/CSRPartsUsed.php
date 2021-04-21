<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\prd_inventory;
use App\Models\product;

class CSRPartsUsed extends Model
{
    use SoftDeletes;
    protected $table = 'csrparts_used';
    protected $guarded = [];

    public function inventory()
    {
        return $this->belongsTo(prd_inventory::class,'inventory_id');
    }

    public function product()
    {
        return $this->belongsTo(product::class,'product_id');
    }


}
