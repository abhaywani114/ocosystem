<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExtStockReport extends Model
{
    protected $table = 'ext_stockreport';
    use SoftDeletes;

    protected $guarded = [];
    
}
