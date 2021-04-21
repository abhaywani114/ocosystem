<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PjobMerchantProduct extends Model
{
    protected $table = 'pjobmerchantproduct';
    protected $guarded = [];
    use SoftDeletes;
}
