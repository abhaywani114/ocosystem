<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class productpreference extends Model
{
    protected $table = 'opos_productpreference';
     protected $guarded = [];
    use SoftDeletes;

}
