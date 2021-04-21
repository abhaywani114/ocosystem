<?php
/* Custom CRPT Admin Fee income Routes */
Route::get('crpt/admin_fee_income/{company_id}', 'CRPTAdminFeeIncomeController@showAdminFeeIncome')->
	name('admin_fee_income.ajax.index')->middleware('CheckRole:onlyuser');
?>
