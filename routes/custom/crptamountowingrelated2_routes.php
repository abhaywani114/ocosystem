<?php
/* Custom CRPT Amount Owing Related 2 Routes */
Route::get('crpt/amount_owing_related2/{company_id}', 'CRPTAmountOwingRelated2Controller@showAmountOwingRelated2')->
	name('amount_owing_related2.ajax.index')->middleware('CheckRole:onlyuser');
?>
