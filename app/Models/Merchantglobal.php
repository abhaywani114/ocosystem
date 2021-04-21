<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchantglobal extends Model
{
    protected $table = 'merchantglobal';
    use SoftDeletes;

    protected $guarded = [];
}
