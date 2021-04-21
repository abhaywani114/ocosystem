<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CMRApproval;

class ECMerchant extends Model
{
    use SoftDeletes;
    protected $table = 'ec_merchant';
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo('App\User', "user_id", "id");
    }





}
