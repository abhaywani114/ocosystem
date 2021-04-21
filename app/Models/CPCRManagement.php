<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CPCRManagement extends Model
{
    use SoftDeletes;
    protected $table = 'cpcrmgmt';
    protected $guarded = [];

    /* Get the form for the csr.
     */
    public function csrform()
    {
        return $this->hasOne("App\Models\CSRForm", "cpcrmgmt_id", "id");
    }
}
