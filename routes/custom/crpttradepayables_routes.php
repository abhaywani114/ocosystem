<?php
/* Custom CRPT Trade Payables Routes */
Route::get('crpt/trade_payables/{company_id}','CRPTTradePayablesController@showCRPT_trade_payables')->name('trade_payables.ajax.index');

?>
