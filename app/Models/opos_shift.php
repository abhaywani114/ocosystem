<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_shift extends Model
{
    protected $table = 'opos_shift';
    use SoftDeletes;

    protected $guarded = [];
}
