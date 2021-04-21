<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Yadakhov\InsertOnDuplicateKey;

class ogController extends Model
{
    use InsertOnDuplicateKey;
    protected $table = "og_controller";
}
