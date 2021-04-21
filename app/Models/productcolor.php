<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class productcolor extends Model
{
    protected $table = 'productcolor';
    protected $guarded = [];
    use SoftDeletes;
}
