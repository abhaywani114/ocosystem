<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommScheme extends Model
{
    protected $table = 'comm_scheme';

    protected $primaryKey = 'id';

    protected $guarded = [];
}
