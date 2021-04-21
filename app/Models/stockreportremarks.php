<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class stockreportremarks extends Model
{
    protected $table = 'stockreportremarks';
    use SoftDeletes;

    protected $guarded = [];
}
