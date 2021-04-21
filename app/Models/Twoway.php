<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Twoway extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'twoway';
    protected $fillable = ['initiator_user_id'];
}
