<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class opos_terminalproduct extends Model
{
    protected $table = 'opos_terminalproduct';
    use SoftDeletes;

    protected $guarded = [];

    public function product_name()
    {
        return $this->belongsTo(product::class,'product_id');
    }
}
