<?php
/* Custom CRPT Repayment From Related Routes */
Route::get('crpt/repayment_from_related/{company_id}', 'CRPTRepaymentFromRelatedController@showRepaymentFromRelated')->
	name('repayment_from_related.ajax.index')->middleware('CheckRole:onlyuser');
?>
