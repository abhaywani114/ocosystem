<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class plat_counter extends Model
{
    protected $table = 'plat_counter';
    use SoftDeletes;

    protected $guarded = [];

    public function devprinter()
    {
        return $this->hasOne(plat_devprinter::class,'counter_id');
    }

    public function subcategory()
    {
        return $this->hasOne(plat_countersubcat1::class,'counter_id');
    }
}
