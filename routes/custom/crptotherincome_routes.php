<?php
/* Custom CRPT Other Income Routes */
Route::get('crpt/other_income/{company_id}', 'CRPTOtherIncomeController@showOtherIncome')->name('otherIncome.ajax.income')->middleware('CheckRole:onlyuser');
?>
