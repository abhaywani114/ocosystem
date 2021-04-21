<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Franchise extends Model
{
    //
    protected $table = "franchise";
    use SoftDeletes;

    public function merchants(){
//        return $this->belongsToMany(Merchant::class,FranchiseMerchant::class, 'franchise_id', 'franchisee_merchant_id');
        return $this->belongsToMany(Merchant::class, 'franchisemerchant', 'franchise_id', 'franchisee_merchant_id');
    }
}
