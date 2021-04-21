<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class voucher extends Model
{
    protected $table = 'prd_voucher';
    protected $guarded = [];
    use SoftDeletes;

	public function product_name()
    {
        return $this->belongsTo(product::class,'product_id');
    }

    public function product_category()
    {
        return $this->belongsTo(prd_subcategory::class,'subcategory_id');
    }
}
