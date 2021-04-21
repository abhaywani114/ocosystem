<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommSchemeLevel extends Model
{
    protected $table = 'comm_schemelevel';

    protected $primaryKey = 'id';

    protected $guarded = [];
}
