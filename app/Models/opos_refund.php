<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_refund extends Model
{
    protected $table = 'opos_refund';
    use SoftDeletes;

    protected $guarded = [];
}
