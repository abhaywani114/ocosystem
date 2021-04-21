<?php
/* Custom Company Report Routes */
Route::post('company-directory','CompanyReportController@index')->name('report.ajax.directory');
Route::get('show-companyreport-directory-view','CompanyReportController@showDirectoryView')->name('report.ajax.company.directory');
Route::get('show-companyreport-directory-list','CompanyReportController@showDirectoryList')->name('report.ajax.directory_list');
?>
