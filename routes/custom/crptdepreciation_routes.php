<?php
/* Custom CRPT Depreciation & Amortization Routes */

Route::get('crpt/depreciation/{company_id}',/*/{company_id}*/ 'CRPTDepreciationController@showCRPT_depriciation')->name('depreciation.ajax.index');
Route::post('depreciation-ajax.index', 'CRPTDepreciationController@index')->name('depreciation-ajax.index');
// Route::get('crpt/depreciation/qtr',/*/{company_id}/{qtr}*/ 'CRPTDepreciationController@showCRPT_depriciationQtr')->name('depreciation.ajax.qtr');
?>
