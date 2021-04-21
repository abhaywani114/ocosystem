<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dgo_apisecurity extends Model
{
	use SoftDeletes;
	protected $table = 'dgo_apisecurity';
	protected $guarded = [];

}
