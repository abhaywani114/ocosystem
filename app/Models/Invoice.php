<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    protected $table = 'invoice';
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function product_id()
    {
        return $this->hasMany(InvoiceProduct::class,'invoice_id');
    }
}
