<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_shiftdetails extends Model
{
    protected $table = 'opos_shiftdetails';
    use SoftDeletes;

    protected $guarded = [];
}
