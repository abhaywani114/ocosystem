<?php

namespace App\models;

use App\Models\product;
use App\models\prd_commerce;
use App\Models\prd_inventory;
use Illuminate\Database\Eloquent\Model;

class prd_ecommerceinventory extends Model
{
    protected $table = 'prd_ecommerceinventory';
    protected $guarded = [];
    
    public function ecommerce() {
        return $this->belongsTo(prd_commerce::class, 'ec_id');
    }

    public function inventory() {
        return $this->belongsTo(prd_inventory::class, 'inventory_id');
    }
}
