<?php

namespace App\models;

use App\Models\restaurant;
use App\models\prd_commerce;
use Illuminate\Database\Eloquent\Model;

class prd_ecommercerestaurant extends Model
{
    protected $table = 'prd_ecommercerestaurant';
    protected $guarded = [];

    public function ecommerce() {
        return $this->belongsTo(prd_commerce::class, 'ec_id');
    }

    public function restaurant() {
        return $this->belongsTo(restaurant::class, 'restaurant_id');
    }
}
