<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prjmgmtdoc extends Model
{
    //
	protected $table = 'projmgmtdocument';
    use SoftDeletes;

    protected $guarded = [];
}
