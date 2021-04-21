<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class takeaway extends Model
{
    protected $table = 'opos_ftypetakeaway';
    protected $guarded = [];
    use SoftDeletes;
}
