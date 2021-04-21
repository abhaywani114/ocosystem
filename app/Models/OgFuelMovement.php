<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OgFuelMovement extends Model
{
    protected $table = 'og_fuelmovement';
    protected $guarded = [];
    use SoftDeletes;
}
