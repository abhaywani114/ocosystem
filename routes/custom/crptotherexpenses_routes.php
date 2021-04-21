<?php
/* Custom CRPT Other Expenses Routes */
Route::get('crpt/other_expenses/{company_id}','CRPTOtherExpensesController@showCRPT_other_expenses')->name('other_expenses.ajax.index');

?>
