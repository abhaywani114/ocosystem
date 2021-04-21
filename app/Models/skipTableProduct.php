<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class skipTableProduct extends Model
{
    protected $table = 'plat_skipproduct';
    protected $guarded = [];
    use SoftDeletes;
}
