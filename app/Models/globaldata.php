<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class globaldata extends Model
{
    protected $table = 'global';
    protected $guarded = [];
    use SoftDeletes;
}
