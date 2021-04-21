<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class attachment extends Model
{
    protected $table = 'attachment';
    use SoftDeletes;

    protected $guarded = [];
}
