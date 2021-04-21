<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class skipTable extends Model
{
    protected $table = 'plat_skip';
    protected $guarded = [];
    use SoftDeletes;
}
