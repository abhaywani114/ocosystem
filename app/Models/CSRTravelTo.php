<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CSRTravelTo extends Model
{
    use SoftDeletes;
    protected $table = 'csrtravel';
    protected $guarded = [];

}
