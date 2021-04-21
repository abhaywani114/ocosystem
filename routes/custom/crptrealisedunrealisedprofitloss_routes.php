<?php
/* Custom CRPT Realised Unrealised Profit/Loss Routes */
Route::get('crpt/realised_unrealised/{company_id}', 'CRPTRealisedUnrealisedProfitLossController@showRealisedUnrealised')->
	name('realised_unrealised.ajax.index')->middleware('CheckRole:onlyuser');
?>
