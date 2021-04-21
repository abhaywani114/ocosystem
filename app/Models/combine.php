<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class combine extends Model
{
    protected $table = 'plat_combine';
    protected $guarded = [];
    use SoftDeletes;
}
