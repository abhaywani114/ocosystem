<?php
/* Custom CRPT Dividend Expense Routes */
Route::get('crpt/dividend_expense/{company_id}', 'CRPTDividendExpenseController@showDividendExpense')->
	name('dividend_expense.ajax.index')->middleware('CheckRole:onlyuser');
?>
