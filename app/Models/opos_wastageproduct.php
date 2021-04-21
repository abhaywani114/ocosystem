<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_wastageproduct extends Model
{
    protected $table = 'opos_wastageproduct';
    use SoftDeletes;

    protected $guarded = [];
}
