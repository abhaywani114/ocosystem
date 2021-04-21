<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oneway extends Model
{
    protected $fillable = [
        'self_merchant_id',
        'company_name',
        'business_reg_no',
        'address',
        'contact_name',
        'mobile_no'
    ];

    protected $table = 'oneway';

    public function onewayrelation()
    {
        return $this->hasOne('App\Models\OnewayRelation', 'oneway_id', 'id');
    }

    public function onewaylocation()
    {
        return $this->hasOne('App\Models\OnewayLocation', 'oneway_id', 'id');
    }

}
