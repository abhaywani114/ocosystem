<?php
/* Custom CRPT Business Combination Routes */
Route::get('crpt/business_combination/{company_id}', 'CRPTBusinessCombinationController@showBusinessCombination')->
	name('business.ajax.combination')->middleware('CheckRole:onlyuser');
?>
