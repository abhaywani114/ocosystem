<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class restaurant extends Model
{
    protected $table = 'prd_restaurant';
    protected $guarded = [];
    use SoftDeletes;

      public function product_name()
    {
        return $this->belongsTo(product::class,'product_id');
    }
}
