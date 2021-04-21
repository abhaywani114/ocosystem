<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CMRApproval;

class ECBuyer extends Model
{
    use SoftDeletes;
    protected $table = 'ec_buyer';
    protected $guarded = [];

    /**
     * Get the travels for the cmr.
     */
//    public function travels()
//    {
//        return $this->hasMany('App\Models\CMRTravelTo', "cmrform_id", "id");
//    }

    /**
     * Get the services for the cmr.
     */
//    public function services()
//    {
//        return $this->hasMany("App\Models\CMRFormServices", "cmrform_id", "id");
//    }



}
