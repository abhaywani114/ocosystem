<?php
/* Custom CRPT Investment in Subsidiary Companies Routes */

Route::get('crpt/invest_subs_companies/{company_id}', 'CRPTInvestSubsCompaniesController@showInvestSubsCompaniesGRNCASaleView')->name('crpt.invest.subs.companies.index');

?>
