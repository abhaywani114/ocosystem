<?php

namespace App\models;

use App\Models\prd_ecommerceinventory;
use App\Models\prd_ecommercerestaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class prd_commerce extends Model
{
    protected $table = 'prd_ecommerce';
	protected $guarded = [];
    use SoftDeletes;

    public function inventory() {
        return $this->hasMany(prd_ecommerceinventory::class, 'ec_id');
    }

    public function restaurant() {
        return $this->hasMany(prd_ecommercerestaurant::class, 'ec_id');
    }
}
