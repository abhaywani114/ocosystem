<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CMRTravelTo extends Model
{
    use SoftDeletes;
    protected $table = 'cmrtravel';
    protected $guarded = [];

}
