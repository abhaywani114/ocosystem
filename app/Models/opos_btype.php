<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class opos_btype extends Model
{
    protected $table = 'opos_btype';
    use SoftDeletes;

    protected $guarded = [];
}
