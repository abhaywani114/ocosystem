<?php
/* Custom CRPT Managment service expense Routes */
Route::get('crpt/mgmt_svcs_expense/{company_id}', 'CRPTMgmtSvcsExpenseController@showMgmtServiceExpense')->
	name('mgmt_svcs_expense.ajax.index')->middleware('CheckRole:onlyuser');
?>
