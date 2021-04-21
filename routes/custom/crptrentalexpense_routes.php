<?php
/* Custom CRPT Rental Expense Routes */
Route::get('crpt/rental_expense/{company_id}', 'CRPTRentalExpenseController@showRentalExpense')->
	name('rental_expense.ajax.index')->middleware('CheckRole:onlyuser');
?>
