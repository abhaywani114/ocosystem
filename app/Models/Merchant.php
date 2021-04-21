<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchant extends Model
{
    protected $table = 'merchant';
    protected $guarded = [];
    use SoftDeletes;

    public function franchises(){
        return $this->belongsToMany(Franchise::class, 'franchisemerchant', 'franchisee_merchant_id', 'franchisee_merchant_id');
    }

    public function franchisemerchant(){
        return $this->hasMany(FranchiseMerchant::class, 'franchisee_merchant_id');
    }
}
