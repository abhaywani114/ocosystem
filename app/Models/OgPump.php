<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OgPump extends Model
{
    protected $table = 'og_pump';
    protected $guarded = [];
    use SoftDeletes;
    
    function pumpNozzlesData() {
        return $this->hasMany(OgPumpNozzle::class, 'pump_id', 'pump_no');
    }
}
