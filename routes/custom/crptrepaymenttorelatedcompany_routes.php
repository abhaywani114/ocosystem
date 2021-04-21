<?php
/* Custom CRPT Repayment To Related Routes */
Route::get('crpt/repayment_to_related/{company_id}', 'CRPTRepaymentToRelatedController@showRepaymentToRelated')->
	name('repayment_to_related.ajax.index')->middleware('CheckRole:onlyuser');
?>
