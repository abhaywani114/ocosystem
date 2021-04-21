<?php
/* Custom CRPT List of JVC/JCE Routes */
Route::get('crpt/list_of_jvcjce/{company_id}', 'CRPTListOfJVCJCEController@showListOfJVCJCE')->
	name('list_of_jvcjce.ajax.index')->middleware('CheckRole:onlyuser');
?>
