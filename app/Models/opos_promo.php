<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\opos_promo_location;

class opos_promo extends Model
{
    //
    protected $table="opos_promo";
    protected $guarded = ['id'];
    //use SoftDeletes;


    /**
     * opos_promo relationship with location
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locations() {
        return $this->hasMany(opos_promo_location::class, 'promo_id');
    }

}