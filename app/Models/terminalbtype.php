<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class terminalbtype extends Model
{
    protected $table = 'opos_terminalbtype';
    protected $guarded = [];
    use SoftDeletes;

}
