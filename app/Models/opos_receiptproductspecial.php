<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_receiptproductspecial extends Model
{
    protected $table = 'opos_receiptproductspecial';
    use SoftDeletes;

    protected $guarded = [];
}
