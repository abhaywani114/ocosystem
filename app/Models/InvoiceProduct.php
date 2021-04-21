<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceProduct extends Model
{
    protected $table = 'invoiceproduct';
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class,'id');
    }
}
