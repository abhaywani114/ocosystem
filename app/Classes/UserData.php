<?php
namespace App\Classes;

use \Illuminate\Http\Request;
use \App\Models\Company;
use \App\Models\globaldata;
use \App\Models\role;
use \App\Models\Staff;
use \App\Models\usersrole;
use \App\User;
use Log;
use \Illuminate\Support\Facades\Auth;

class UserData
{
    public $user                  = null;
    protected $isKing                = null;
    protected $isSuperKing           = null;
    protected $isSecondaryAdmin      = null;
    protected $isSuperAdmin          = null;
    protected $isSuperSecondaryAdmin = null;
    protected $CompanyID             = null;

    public function __construct($user = null)
    {

        if ($user == null) {
            $this->user = Auth()->user();
        } else {
            $this->user = $user;
        }

        if (class_basename($this->user) != 'User' || $this->user->getTable() != 'users' || $this->user->staff->getTable() != 'staff') {
            throw new \Exception("Invalid user parameter");
        }

    }

    public function is_super_king()
    {

        if (globaldata::where('property', 'admin_system_id')->first()->value == $this->user->staff->systemid) {
            $this->isSuperKing = true;
        }

        return $this->isSuperKing;
    }

    public function is_king()
    {

	    if (Company::where([
		    "id" => $this->company_id(),
		    'owner_user_id' => $this->user->id
	    	])->first()) {
            $this->isKing = true;
        }

        return $this->isKing;
    }

    public function is_secondary_admin()
    {

        if (usersrole::where(['role_id' => role::where('name', 'sadmin')->first()->id, "user_id" => $this->user->id])->first()) {
            $this->isSecondaryAdmin = true;
        }

        return $this->isSecondaryAdmin;
    }

    public function is_super_secondary_admin()
    {

        if (usersrole::where(['role_id' => role::where('name', 'super')->first()->id, "user_id" => $this->user->id])->first()) {
            $this->isSuperSecondaryAdmin = true;
        }

        return $this->isSuperSecondaryAdmin;
    }

    public function is_super_admin()
    {
        if ($this->user->type == 'admin') {
            $this->isSuperAdmin = true;
        }

        return $this->isSuperAdmin;
    }


    public function company_id()
    {
		/*
		if(\Session::has('viewMerchant')) {  
            foreach (\Session::get('viewMerchant') as $debug) {
                Log::info("Session Hash: ". implode(" => ",$debug));
            }
	
			Log::info("Merchant Hash:". (empty(request()->
				header('X-MERCHANT-HASH')) ? request()->
				header('X-MERCHANT-HASH'):"Nothing"));

			Log::info("Header Hash:".request()->
				header('X-MERCHANT-HASH'));

        } else {
            Log::info("No hash header");
        }
		*/

        if (\Session::has('viewMerchant') && $this->is_super_admin()) {

            if (empty(request()->header('X-MERCHANT-HASH')) ||
				!empty(request()->header('X-MERCHANT-HASH')) ) {
                $merchant_hash = empty(request()->header('X-MERCHANT-HASH')) ?
					request()->merchant_hash:request()->
					header('X-MERCHANT-HASH');

                $this->CompanyID = $this->merchant_id_by_hash($merchant_hash);//\Session::get('viewMerchant');

				return $this->CompanyID;

            } else {
                \Log::info('Invalid merchant hash');
                abort(401);
            }
        } else {
            $this->CompanyID = $this->user->staff->company_id;
            return $this->CompanyID;
        }
    }

    public function merchant_id() {
        return $this->company_id();
    }

    public function allow_all()
    {
        if (\Session::has('viewMerchant') && $this->is_super_admin()) {
            return true;
        } else {
            return false;
        }
    }

    public function view_merchant($id)
    {
        $merchant_array = array(
            "merchant_id"=>$id, 
            "hash"=> \Hash::make($id)
        );
        
        $session_array = \Session::get('viewMerchant');
        $is_active = $this->is_merchat_session_active($id);
        
        \Log::info("Is merchant active: $is_active");

        if (!$is_active) {
            $session_array[] = $merchant_array;
            \Session::put('viewMerchant', $session_array);
            return $merchant_array['hash'];
        } else {
            return $is_active;
        }
    }

    public function exit_merchant()
    {
        if (\Session::has('viewMerchant') && $this->is_super_admin()) {
            \Session::forget('viewMerchant');

        }
    }


    private function is_merchat_session_active($merchant_id) {
        $array = \Session::get('viewMerchant');

        if (is_array($array)) {
            foreach ($array as $merchant_stored) {
                if ($merchant_stored['merchant_id'] == $merchant_id) {
                   return $merchant_stored['hash'];
                }
            }
        
        }
        return null;
    }

    private function merchant_id_by_hash($hash) {
        $array = \Session::get('viewMerchant');

        if (is_array($array)) {
            foreach ($array as $merchant_stored) {
                if ($merchant_stored['hash'] == $hash) {
                    return $merchant_stored['merchant_id'];
                }
            }
        }

        return false;
    }

}
