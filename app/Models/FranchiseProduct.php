<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FranchiseProduct extends Model
{
    protected $table = 'franchiseproduct';
    public function productInformation()
    {
        return $this->hasOne(product::class,'id','product_id');
    }
}
