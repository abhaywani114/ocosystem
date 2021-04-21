<?php
/* Custom Partner Routes */

Route::resource('company', 'CompanyController');
Route::post('show-company-edit-modal', 'CompanyController@showEditModal')->name('company.edit.modal');
Route::post('update-company-data', 'CompanyController@updateCompanyFields')->name('company.edit.update');
Route::post('update-company-status', 'CompanyController@updateCompanyStatus')->name('company.edit.status.update');

Route::get('/company/company/{company}','CompanyController@showCompanyDetails');
?>

