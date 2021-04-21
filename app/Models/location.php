<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class location extends Model
{
    protected $table = 'location';
    protected $guarded = [];
    use SoftDeletes;

    /**
     * @param Integer $id
     * @return array
     */
    public function getBranchLocationByLoggedInUserId($id){
        $company = DB::select('SELECT
				l.branch,
				l.created_at,
				l.warehouse,
				l.foodcourt,
				l.id,
				c.name
			FROM
				company c,
				merchant m,
				location l,
				merchantlocation ml
			WHERE
				c.owner_user_id = '.$id.'
				AND m.company_id = c.id
				AND ml.merchant_id = m.id
				AND ml.location_id = l.id
				AND l.branch is NOT NULL
				AND l.deleted_at is NULL;
		');

        return $company;
    }
}
