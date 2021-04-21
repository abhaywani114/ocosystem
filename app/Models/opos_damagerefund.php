<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_damagerefund extends Model
{
    protected $table = 'opos_damagerefund';
    use SoftDeletes;

    protected $guarded = [];
}
