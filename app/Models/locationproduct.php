<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class locationproduct extends Model
{
    protected $table = 'locationproduct';
    use SoftDeletes;

    protected $guarded = [];

    public function product() {
        return $this->belongsTo('App\Models\product');
    }

    public function location() {
        return $this->belongsTo(location::class);
    }
}
