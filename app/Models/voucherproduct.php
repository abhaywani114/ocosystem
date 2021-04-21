<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class voucherproduct extends Model
{
    protected $table = 'voucherproduct';
    use SoftDeletes;
}
