<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class terminal extends Model
{
    protected $table = 'opos_terminal';
    protected $guarded = [];
    use SoftDeletes;

public function terminalreceipt()
{
	return $this->hasMany('App\Models\opos_receipt','terminal_id','id');
}
}
