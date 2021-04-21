<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class opos_member extends Model
{
    protected $table = 'opos_member';
    use SoftDeletes;
 
}
