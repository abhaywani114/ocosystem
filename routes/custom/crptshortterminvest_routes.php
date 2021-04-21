<?php
/* Custom CRPT Other Expenses Routes */
Route::get('crpt/short_term_invest/{company_id}','CRPTShortTermInvestmentController@showCRPT_short_term_invest')->name('short_term_invest.ajax.index');

?>
