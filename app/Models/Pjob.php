<?php

namespace App\Models;
use App\Models\Projmgmt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pjob extends Model
{
    protected $table = 'pjob';
    protected $appends = ["open"];
    use SoftDeletes;

    protected $guarded = [];

    public function projmgmt()
    {
        return $this->belongsTo(Projmgmt::class);
    }
    
 
    public function getOpenAttribute(){
        return true;
    }
}
