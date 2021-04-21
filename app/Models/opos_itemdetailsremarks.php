<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_itemdetailsremarks extends Model
{
    protected $table = 'opos_itemdetailsremarks';
    use SoftDeletes;

    protected $guarded = [];
}
