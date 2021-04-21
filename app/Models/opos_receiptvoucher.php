<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_receiptvoucher extends Model
{
    protected $table = 'opos_receiptvoucher';
    use SoftDeletes;

    protected $guarded = [];

}
