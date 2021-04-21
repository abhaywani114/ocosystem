<?php
/* Custom CRPT Dividend Payable Routes */
Route::get('crpt/dividend_payable/{company_id}', 'CRPTDividendPayableController@showDividendPayable')->name('dividendPayable.ajax.index')->middleware('CheckRole:onlyuser');
?>
