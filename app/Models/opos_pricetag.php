<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class opos_pricetag extends Model
{
    protected $table = 'opos_pricetag';
    use SoftDeletes;

    protected $guarded = [];
	
}
