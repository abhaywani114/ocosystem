<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnewayRelation extends Model
{
    protected $fillable = [];
    protected $table = 'onewayrelation';
    public function oneway()
    {
        return $this->belongsTo('App\Models\Oneway', 'oneway_id', 'id');
    }
}
