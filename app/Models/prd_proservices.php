<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class prd_proservices extends Model
{
    protected $table = 'prd_proservice';
    use SoftDeletes;
	
	protected $primaryKey = 'product_id';
	
    protected $guarded = [];	
    
    public function product_name()
    {
        return $this->belongsTo(product::class,'product_id');
    }
}
