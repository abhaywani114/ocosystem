<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class prd_category extends Model
{
    protected $table = 'prd_category';
    protected $guarded = [];
    use SoftDeletes;
}
