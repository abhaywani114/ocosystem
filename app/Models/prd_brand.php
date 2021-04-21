<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class prd_brand extends Model
{
    protected $table = 'prd_brand';
    protected $guarded = [];
    use SoftDeletes;
}
