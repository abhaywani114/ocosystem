<?php
/* Custom CRPT FRS&:27 disclosure:fair value Hierarchy Routes */
Route::get('crpt/frs7_fair_value/{company_id}', 'CRPTFrs7FairValueController@showFairValue')->
	name('frs7_fair_value.ajax.index')->middleware('CheckRole:onlyuser');
?>
