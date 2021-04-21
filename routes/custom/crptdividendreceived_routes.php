<?php
/* Custom CRPT Dividend Received Routes */
Route::get('crpt/dividend_received/{company_id}', 'CRPTDividendReceivedController@showDividendReceived')->
	name('dividend_received.ajax.index')->middleware('CheckRole:onlyuser');
?>
