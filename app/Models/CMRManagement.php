<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CMRManagement extends Model
{
    use SoftDeletes;
    protected $table = 'cmrmgmt';
    protected $guarded = [];

    /* Get the form for the cmr.
     */
    public function cmrform()
    {
        return $this->hasOne("App\Models\CMRForm", "cmrmgmt_id", "id");
    }

    public function tech()
    {
        return $this->belongsTo(User::class,'technician_user_id');
    }
}
