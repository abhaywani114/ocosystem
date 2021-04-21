<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinancialYear extends Model
{
    protected $table = 'companyfinancialyear';
    protected $guarded = [];
    protected $dates = ['start_financial_year'];
    use SoftDeletes;
}
