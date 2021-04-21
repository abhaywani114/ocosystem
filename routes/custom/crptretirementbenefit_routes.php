<?php
/* Custom CRPT Retirement Benefits Routes */
Route::get('crpt/retirement_benefit/{company_id}', 'CRPTRetirementBenefitController@showRetirementBenefit')->
	name('retirement_benefit.ajax.index')->middleware('CheckRole:onlyuser');
?>