<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kitchenprinter extends Model
{
    //
    protected $table='plat_devprinter';

    public function counter(){
        return $this->belongsTo('plat_counter','counter_id');
    }
}
