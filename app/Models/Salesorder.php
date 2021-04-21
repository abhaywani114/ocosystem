<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salesorder extends Model
{
    protected $table = 'salesorder';
    use SoftDeletes;

    protected $guarded = [];
    
    public function MGlink_so()
    {
        return $this->hasOne(MGlink_so::class, 'salesorder_id');
    }
}
