<?php
/* Custom CRPT Managment service income Routes */
Route::get('crpt/mgmt_svcs_income/{company_id}', 'CRPTMgmtSvcsIncomeController@showMgmtServiceIncome')->
	name('mgmt_svcs_income.ajax.index')->middleware('CheckRole:onlyuser');
?>
