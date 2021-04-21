<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class plat_devprinter extends Model
{
    protected $table = 'plat_devprinter';
    use SoftDeletes;

    protected $guarded = [];
}
