<?php
/* Custom CRPT Contingent Liabilities Routes */
Route::get('crpt/contingent_liabilities/{company_id}', 'CRPTContingentLiabilitiesController@showContingentLiabilities')->
	name('disposalSubsidary.ajax.index')->middleware('CheckRole:onlyuser');
?>
