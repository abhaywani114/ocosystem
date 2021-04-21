<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class individual extends Model
{
    protected $table = 'individual';
    protected $guarded = [];
    use SoftDeletes;
}
