<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class voucherlist extends Model
{
    //
    protected $table = 'voucherlist';
    protected $guarded = [];
    use SoftDeletes;

    public function voucher()
    {
        return $this->belongsTo(voucher::class,'voucher_id');
    }
    public function location()
    {
        return $this->belongsTo(location::class,'location_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'staff_user_id');
    }
}
