<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class role extends Model
{
    protected $table = 'role';
    protected $guarded = [];
    use SoftDeletes;
}
