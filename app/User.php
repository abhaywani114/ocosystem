<?php

namespace App;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function staff()
    {
        return $this->hasOne(Staff::class, 'user_id')->withDefault();
    }

    public static function getUserName($id){

        $user= User::select('users.name','staff.systemid')->join('staff','users.id','staff.user_id')->where('users.id',$id)->first();
        return $user->name.' '.$user->systemid;
    }

    public function user_company()
    {
        return $this->hasOne('App\Models\Company', 'owner_user_id', 'id');
    }

}
