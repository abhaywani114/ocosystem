<?php
/* Custom CRPT FRS7:Sensitivity Analysis Routes */
Route::get('crpt/frs7_sensitivity/{company_id}', 'CRPTFrs7SensitivityAnalysisController@showSensitivity')->
	name('frs7_sensitivity.ajax.index')->middleware('CheckRole:onlyuser');
?>
