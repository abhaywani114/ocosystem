<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_brancheod extends Model
{
    protected $table = 'opos_brancheod';
    use SoftDeletes;

    protected $guarded = [];
}
