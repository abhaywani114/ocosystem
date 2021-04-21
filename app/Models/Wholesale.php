<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wholesale extends Model
{
    protected $table = 'wholesale';
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $guarded = [];
}
