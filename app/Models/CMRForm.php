<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CMRApproval;

class CMRForm extends Model
{
    use SoftDeletes;
    protected $table = 'cmrform';
    protected $guarded = [];

    /**
     * Get the travels for the cmr.
     */
    public function travels()
    {
        return $this->hasMany('App\Models\CMRTravelTo', "cmrform_id", "id");
    }

    /**
     * Get the services for the cmr.
     */
    public function services()
    {
        return $this->hasMany("App\Models\CMRFormServices", "cmrform_id", "id");
    }

    /**
     * Get the parts used for the cmr.
     */
    public function parts()
    {
        return $this->hasMany("App\Models\CMRPartsUsed", "cmrform_id", "id");
    }

        /**
     * Get the approvals for the cmr.
     */
    public function approvals()
    {
        return $this->hasMany(CMRApproval::class, "cmrform_id", "id");
    }

    public function cmrManagement()
    {
        return $this->belongsTo(CMRManagement::class,'cmrmgmt_id','id');
    }



}
