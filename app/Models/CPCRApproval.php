<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CPCRApproval extends Model
{
    use SoftDeletes;
    protected $table = 'cpcrapproval';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'approver_user_id');
    }
}
