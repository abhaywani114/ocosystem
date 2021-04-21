<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_extreceiptparam extends Model
{
    protected $table = 'opos_extreceiptparam';
    use SoftDeletes;

    protected $guarded = [];
}
