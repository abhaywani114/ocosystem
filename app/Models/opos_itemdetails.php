<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_itemdetails extends Model
{
    protected $table = 'opos_itemdetails';
    use SoftDeletes;

    protected $guarded = [];
}
