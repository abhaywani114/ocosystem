<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_wastage extends Model
{
    protected $table = 'opos_wastage';
    use SoftDeletes;

    protected $guarded = [];
}
