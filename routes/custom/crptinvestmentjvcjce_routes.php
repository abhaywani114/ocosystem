<?php
/* Custom CRPT Investment in JVC/JCE Routes */
Route::get('crpt/investments_jvcjce/{company_id}', 'CRPTInvestmentJVCJCEController@showinvestmentsJVCJCE')->
	name('investments_jvcjce.ajax.index')->middleware('CheckRole:onlyuser');
?>
