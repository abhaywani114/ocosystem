<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class skipTableProductSpecial extends Model
{
    protected $table = 'plat_skipproductspecial';
    protected $guarded = [];
    use SoftDeletes;
}
