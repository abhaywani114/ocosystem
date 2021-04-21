<?php
/* Custom CRPT HP Lease Routes */
Route::get('crpt/hp_lease/{company_id}','CRPTHPLeaseController@showCRPT_hp_lease')->name('hp_lease.ajax.index');

?>
