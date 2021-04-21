<?php
// Custom Landing Routes */
use \App\Models\usersrole;
use \App\Models\role;
use \Illuminate\Support\Facades\Auth;



Route::get('/procured', function () {
	$id = Auth::user()->id;
	$user_roles = usersrole::where('user_id',$id)->get();

	$is_king =  \App\Models\Company::where('owner_user_id',Auth::user()->id)->first();

	if ($is_king != null) {
		$is_king = true;	
	} else {
		$is_king  = false;
	}


    return view('data.procured',compact('user_roles','is_king'));
})->middleware('auth');


?>
