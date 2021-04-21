<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class crptdirectory extends Model
{
    protected $table = 'crpt_directory';
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $guarded = [];
}
