<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class OgFuelPrice extends Model
{
    protected $table = 'og_fuelprice';
    protected $guarded = [];
    use SoftDeletes;
	
	public function user_name()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
