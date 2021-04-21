<?php
/* Custom CRPT Investment in Associated Companies Routes */

Route::get('crpt/invest_asso_companies/{company_id}', 'CRPTInvestAssoCompaniesController@showInvestAssoCompaniesView')->name('crpt.investasso.companies.index');
?>
