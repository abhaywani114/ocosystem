<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class splitTable extends Model
{
    protected $table = 'plat_split';
    protected $guarded = [];
    use SoftDeletes;

    public function openBill()
    {
        return $this->belongsTo(openBill::class,'openbill_id');
    }
}
