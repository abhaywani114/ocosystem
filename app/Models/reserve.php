<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class reserve extends Model
{
    protected $table = 'plat_reserve';
    protected $guarded = [];
    use SoftDeletes;
}
