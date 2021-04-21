<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommCompany extends Model
{
    protected $table = 'comm_company';

    protected $primaryKey = 'id';

    protected $guarded = [];
}
