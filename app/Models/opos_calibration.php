<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class opos_calibration extends Model
{
    //
    protected $table = 'opos_calibration';
    use SoftDeletes;

    protected $guarded = [];
}
