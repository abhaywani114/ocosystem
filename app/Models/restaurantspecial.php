<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class restaurantspecial extends Model
{
    protected $table = 'prd_restaurantspecial';
    protected $guarded = [];
    use SoftDeletes;
}
