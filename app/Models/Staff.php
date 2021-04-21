<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    protected $table = 'staff';



    /* public function companyname() {
        $model = Company::where('id', '=', $this->id)->first();
        //Company::find($this->id);
        if($model)
       return $model;
        else {
        return null;
             }

       }*/
}
