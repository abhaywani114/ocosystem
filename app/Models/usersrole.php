<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usersrole extends Model
{
    protected $table = 'usersrole';
    protected $guarded = [];
    use SoftDeletes;

     public function role_name() {
     	return $this->belongsTo(role::class,'role_id');
     }
}
