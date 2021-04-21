<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class locationterminal extends Model
{
    protected $table = 'opos_locationterminal';
    protected $guarded = [];
    use SoftDeletes;
}
