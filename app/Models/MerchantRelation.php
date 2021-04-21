<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MerchantRelation extends Model
{
    use SoftDeletes;
    //
    protected $table = "merchantrelation";
    protected $guarded = ['id'];
    
}
