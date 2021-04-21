<?php
/* Custom CRPT Loan From Related Routes */
Route::get('crpt/loan_from_related/{company_id}', 'CRPTLoanFromRelatedController@showLoanFromRelated')->
	name('loan_from_related.ajax.index')->middleware('CheckRole:onlyuser');
?>
