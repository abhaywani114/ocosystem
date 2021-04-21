<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class organisationhierarchy extends Model
{
    protected $table = 'organisationhierarchy';
    use SoftDeletes;
}
