<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class oposFtype extends Model
{
    protected $table = 'opos_ftype';
    protected $guarded = [];
    use SoftDeletes;
}
