<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OgTank extends Model
{
    protected $table = 'og_tank';
    protected $fillable = [ 'tank_no', 'systemid', 'product_id', 'location_id', 'height', 'deleted_at'];
    protected $guarded = [];
    
    use SoftDeletes;


    public function product_name(){
    	
        return $this->belongsTo(product::class,'product_id');
    }
}

  

