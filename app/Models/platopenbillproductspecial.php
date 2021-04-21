<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class platopenbillproductspecial extends Model
{
    protected $table = 'plat_openbillproductspecial';
    protected $guarded = [];
    use SoftDeletes;
}
