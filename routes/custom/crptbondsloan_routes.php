<?php
/* Custom CRPT Bonds Loan Routes */
Route::get('crpt/bonds_loan/{company_id}','CRPTBondsLoanController@showCRPT_bonds_loan')->name('bonds_loan.ajax.index');

?>
