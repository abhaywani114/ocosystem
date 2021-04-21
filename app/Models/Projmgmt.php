<?php

namespace App\Models;
use App\Models\Pjob;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projmgmt extends Model
{
    protected $table = 'projmgmt';
    use SoftDeletes;

    protected $appends = ["open"];
    protected $guarded = [];

    public function pjob()
    {
        return $this->hasMany(Pjob::class,'projmgmt_id');
    }

 
    public function getOpenAttribute(){
        return true;
    }
}
