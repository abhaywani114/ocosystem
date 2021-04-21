<?php
/* Custom CRPT Other Expenses Routes */
Route::get('crpt/trade_receivables/{company_id}','CRPTTradeAndOtherReceivablesController@showCRPT_trade_receivables')->name('trade_receivables.ajax.index');

?>
