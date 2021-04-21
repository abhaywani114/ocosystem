<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class prd_drumbarrel extends Model
{
    protected $table = 'prd_drumbarrel';
    use SoftDeletes;
	
	protected $primaryKey = 'product_id';

    protected $guarded = [];
	
}
