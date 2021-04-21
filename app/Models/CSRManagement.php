<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CSRManagement extends Model
{
    use SoftDeletes;
    protected $table = 'csrmgmt';
    protected $guarded = [];

    /* Get the form for the csr.
     */
    public function csrform()
    {
        return $this->hasOne("App\Models\CSRForm", "csrmgmt_id", "id");
    }

    public function tech()
    {
        return $this->belongsTo(User::class,'technician');
    }
}
