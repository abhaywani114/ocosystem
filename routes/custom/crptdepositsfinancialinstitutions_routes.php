<?php
/* Custom CRPT Other Expenses Routes */
Route::get('crpt/deposits_fin_inst/{company_id}','CRPTDepositsFinancialInstitutionsController@showCRPT_deposits_fin_inst')->name('deposits_fin_inst.ajax.index');

?>
