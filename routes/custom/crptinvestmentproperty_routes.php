<?php
/* Custom CRPT Investment Property Routes */

Route::get('crpt/investment_property/{company_id}', 'CRPTInvestmentPropertyController@showInvestmentPropertyGRNCASaleView')->name('crpt.investment.property.grncasale.index');
?>
