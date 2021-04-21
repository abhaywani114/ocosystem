<?php
/* Custom CRPT Treasury Stock Routes */
Route::get('crpt/treasury_stock/{company_id}', 'CRPTTreasuryStockController@showTreasuryStock')->
	name('treasuryStock.ajax.index')->middleware('CheckRole:onlyuser');
?>
