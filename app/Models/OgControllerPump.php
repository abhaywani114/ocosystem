<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OgControllerPump extends Model
{
    protected $table = 'og_controllerpump';
    protected $guarded = [];
    use SoftDeletes;
}
?>
