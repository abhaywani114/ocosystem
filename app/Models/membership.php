<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class membership extends Model
{
    protected $table = 'prd_membership';
    protected $guarded = [];
    use SoftDeletes;

       public function product_name()
    {
        return $this->belongsTo(product::class,'product_id');
    }
}
