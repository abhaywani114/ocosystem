<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class plat_countersubcat1 extends Model
{
    protected $table = 'plat_countersubcat1';
    use SoftDeletes;

    protected $guarded = [];
}
