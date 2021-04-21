<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PjobOneWayProduct extends Model
{
    protected $table = 'pjobonewayproduct';
    use SoftDeletes;

    protected $guarded = [];
}
