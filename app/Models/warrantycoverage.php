<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class warrantycoverage extends Model
{
    protected $table = 'prd_warranty_coverage';
    protected $guarded = [];
    use SoftDeletes;
}
