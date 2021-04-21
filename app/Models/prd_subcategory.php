<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class prd_subcategory extends Model
{
    protected $table = 'prd_subcategory';
    protected $guarded = [];
    use SoftDeletes;
}
