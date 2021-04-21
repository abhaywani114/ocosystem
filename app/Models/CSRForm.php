<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CSRApproval;

class CSRForm extends Model
{
    use SoftDeletes;
    protected $table = 'csrform';
    protected $guarded = [];

    /**
     * Get the travels for the csr.
     */
    public function travels()
    {
        return $this->hasMany('App\Models\CSRTravelTo', "csrform_id", "id");
    }

    /**
     * Get the parts used for the csr.
     */
    public function parts()
    {
        return $this->hasMany("App\Models\CSRPartsUsed", "csrform_id", "id");
    }

        /**
     * Get the approvals for the csr.
     */
    public function approvals()
    {
        return $this->hasMany(CSRApproval::class, "csrform_id", "id");
    }

    public function csrManagement()
    {
        return $this->belongsTo(CSRManagement::class,'csrmgmt_id','id');
    }


}
