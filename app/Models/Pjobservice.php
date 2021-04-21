<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pjobservice extends Model
{
    protected $table = 'pjobservice';
    use SoftDeletes;

    protected $guarded = [];
}
