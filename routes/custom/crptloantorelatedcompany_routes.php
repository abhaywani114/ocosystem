<?php
/* Custom CRPT Loan To Related Routes */
Route::get('crpt/loan_to_related/{company_id}', 'CRPTLoanToRelatedController@showLoanToRelated')->
	name('loan_to_related.ajax.index')->middleware('CheckRole:onlyuser');
?>
