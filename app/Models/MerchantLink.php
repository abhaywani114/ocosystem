<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantLink extends Model
{
    //
    protected $table = "merchantlink";
    protected $guared = ["id","deleted_at","updated_at"];
    protected $fillable = ["initiator_user_id","responder_user_id","status"];

    public function initiator_user()
    {
        return $this->belongsTo('App\User', 'initiator_user_id', 'id');
    }

    public function responder_user()
    {
        return $this->belongsTo('App\User', 'responder_user_id', 'id');
    }

    public function merchantLinkRelation()
    {
        return $this->hasMany('App\Models\MerchantLinkRelation',"merchantlink_id","id");
    }

}
