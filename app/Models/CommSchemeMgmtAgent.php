<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommSchemeMgmtAgent extends Model
{
    protected $table = 'comm_schememgmt_agent';

    protected $primaryKey = 'id';

    protected $guarded = [];
}
