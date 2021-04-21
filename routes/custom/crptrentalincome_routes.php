<?php
/* Custom CRPT Rental Income Routes */
Route::get('crpt/rental_income/{company_id}', 'CRPTRentalIncomeController@showRentalIncome')->
	name('rental_income.ajax.index')->middleware('CheckRole:onlyuser');
?>
