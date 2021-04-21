<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class productspecial extends Model
{
    protected $table = 'productspecial';
    use SoftDeletes;

    protected $guarded = [];

    public function prd_special_details()
    {
        return $this->belongsTo(prd_special::class,'special_id');
    }
}
