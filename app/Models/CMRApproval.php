<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CMRApproval extends Model
{
    use SoftDeletes;
    protected $table = 'cmrapproval';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'approver_user_id');
    }
}
