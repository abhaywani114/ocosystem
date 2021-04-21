<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    protected $table = 'company';
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function merchantlocations()
    {
    	return $this->hasMany('App\Models\merchantlocation', 'merchant_id', 'id');
    }

    public function merchantlink()
    {
        return $this->belongsTo('App\Models\MerchantLink');
    }

    public function owner_user()
    {
        return $this->belongsTo('App\User', 'owner_user_id', 'id');
    }
}
