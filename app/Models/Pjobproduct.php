<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pjobproduct extends Model
{
    protected $table = 'pjobproduct';
    use SoftDeletes;

    protected $guarded = [];
}
