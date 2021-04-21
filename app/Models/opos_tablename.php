<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_tablename extends Model
{
    protected $table = 'opos_tablename';
    use SoftDeletes;

    protected $guarded = [];
}
