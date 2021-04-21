<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salesorderitem extends Model
{
    protected $table = 'salesorderitem';
    use SoftDeletes;

    protected $guarded = [];
    
    public function product_details()
    {
        return $this->hasOne(product::class, 'id','product_id');
    }
}
