<?php
/* Custom CRPT Disposable Subsidiary Routes */
Route::get('crpt/disposal_subsidiary/{company_id}', 'CRPTDisposableSubsidiaryController@showDisposalSubsidiary')->
	name('disposalSubsidiary.ajax.index')->middleware('CheckRole:onlyuser');
?>
