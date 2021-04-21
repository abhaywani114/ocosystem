<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\OgFuelPrice;

class OgPumpNozzle extends Model
{
    protected $table = 'og_pumpnozzle';
    protected $guarded = [];
    use SoftDeletes;
}

?>
