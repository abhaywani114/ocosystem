<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CPCRApproval;

class CPCRForm extends Model
{
    use SoftDeletes;
    protected $table = 'cpcrform';
    protected $guarded = [];

    /**
     * Get the travels for the csr.
     */
    public function travels()
    {
        return $this->hasMany('App\Models\CPCRTravelTo', "cpcrform_id", "id");
    }

        /**
     * Get the approvals for the csr.
     */
    public function approvals()
    {
        return $this->hasMany(CPCRApproval::class, "cpcrform_id", "id");
    }

}
