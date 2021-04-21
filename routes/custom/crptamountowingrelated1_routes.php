<?php
/* Custom CRPT Amount Owing Related 1 Routes */
Route::get('crpt/amount_owing_related1/{company_id}', 'CRPTAmountOwingRelated1Controller@showAmountOwingRelated1')->
	name('amount_owing_related1.ajax.index')->middleware('CheckRole:onlyuser');
?>
