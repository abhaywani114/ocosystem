<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnewayLocation extends Model
{
    protected $fillable = [];
    protected $table = 'onewaylocation';
    public function oneway()
    {
        return $this->belongsTo('App\Models\Oneway', 'oneway_id', 'id');
    }
}
