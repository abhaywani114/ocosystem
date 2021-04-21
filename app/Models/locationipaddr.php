<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class locationipaddr extends Model
{
    //
    protected $fillable = [
        'company_id',
        'location_id',
        'ipaddr',
        'tsystem',
    ];

    protected $table = 'locationipaddr';
}
