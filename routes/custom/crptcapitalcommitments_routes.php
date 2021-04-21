<?php
	Route::get('crpt/capital_commitments/{company_id}','CRPTCapitalCommitmentController@showCapitalCommitment')->
	name('capital.ajax.commitment')->middleware('CheckRole:onlyuser');;
?>