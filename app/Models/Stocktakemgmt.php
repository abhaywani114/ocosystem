<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stocktakemgmt extends Model
{
	protected $table = 'stocktakemgmt';
    use SoftDeletes;

    protected $primaryKey = 'id';

}
