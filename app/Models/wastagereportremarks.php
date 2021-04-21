<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class wastagereportremarks extends Model
{
    protected $table = 'opos_wastageremarks';
    use SoftDeletes;

    protected $guarded = [];
}
