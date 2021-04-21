<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class director extends Model
{
    protected $table = 'director';
    // use SoftDeletes;

    protected $guarded = [];
}
