<?php
/* Custom CRPT Admin Fee expense Routes */
Route::get('crpt/admin_fee_expense/{company_id}', 'CRPTAdminFeeExpenseController@showAdminFeeExpense')->
	name('admin_fee_expense.ajax.index')->middleware('CheckRole:onlyuser');
?>
