<?php
/* Custom CRPT Impairment Disclosure By Segment Routes */
Route::get('crpt/impairment_disclosure/{company_id}', 'CRPTImpairmentDisclosureController@showImpairmentDisclosureSegment')->
	name('impairment_disclosure.ajax.index')->middleware('CheckRole:onlyuser');
?>
