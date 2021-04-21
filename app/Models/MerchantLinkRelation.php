<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantLinkRelation extends Model
{
    //
    protected $table = "merchantlinkrelation";
    protected $guared = ["id","deleted_at","updated_at"];
    protected $fillable = ["merchantlink_id","status","ptype"];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function merchantlink()
    {
        return $this->belongsTo('App\Models\MerchantLink');
    }


}
