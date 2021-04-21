<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class _function extends Model
{
    protected $table = 'function';
    protected $guarded = [];
    use SoftDeletes;
}
