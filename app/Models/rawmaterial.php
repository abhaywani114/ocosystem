<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class rawmaterial extends Model
{
    protected $table = 'prd_rawmaterial';
    protected $guarded = [];
    use SoftDeletes;

       public function product_name()
    {
        return $this->belongsTo(product::class,'product_id');
    }

}
