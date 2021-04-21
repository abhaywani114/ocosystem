<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GanchattPjobLink extends Model
{
    protected $table = 'ganchatt_pjob_link';
    use SoftDeletes;

    protected $guarded = [];
}
