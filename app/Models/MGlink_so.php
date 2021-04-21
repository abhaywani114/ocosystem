<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MGlink_so extends Model
{
    protected $table = 'mglink_so';
    use SoftDeletes;

    protected $guarded = [];
}

