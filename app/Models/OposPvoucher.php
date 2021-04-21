<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class OposPvoucher extends Model
{
    protected $table = 'opos_pvoucher';

    protected $fillable = [
		'receipt_id',
		'staff_user_id',
		'doc_no',
		'platform',
		'description'
	];

    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class,'staff_user_id')->with('staff');
    }
}