<?php
Route::get('industry/ecommerce','IndustryEcommerceController@index')->name('industry.ecommerce.index');

Route::post('industry/ecommerce/get-datatable', 'IndustryEcommerceController@getDatatable')->name('industry.ecommerce.datatable');

Route::get('industry/ecommerce/platform-store', 'IndustryEcommerceController@store')->name('industry.ecommerce.platform.store');

Route::post('industry/ecommerce/update-platform', 'IndustryEcommerceController@update')->name('industry.ecommerce.update-platform');

Route::delete('industry/ecommerce/destroy/{id}', 'IndustryEcommerceController@destroy')->name('industry.ecommerce.platform.destroy');

Route::get('testsite/{ecommgmt_id}', 'IndustryEcommerceController@testSite')->name('industry.ecommerce.testsite');

Route::get('testsites/cart', 'IndustryEcommerceController@cart')->name('industry.ecommerce.cart');

Route::get('testsites/{admin_id}/padmin', 'IndustryEcommerceController@padmin')->name('platform.admin');

Route::get('testsites', "IndustryEcommerceController@crmadmin")->name('platform.crmadmin');

Route::get('company_all/{id}', 'IndustryEcommerceController@CompanyAllDetails')->name('company_all_company');
Route::get('company/{id}', 'IndustryEcommerceController@Company')->name('company_total');
Route::get('personal_all/{id}', 'IndustryEcommerceController@PersonalAllDetails')->name('personal_all_personal');
Route::get('company/{id}', 'IndustryEcommerceController@Personal')->name('personal_total');

Route::post('platform-products-table','IndustryEcommerceController@platform_products')->
name('industry.ecommerce.platformproducts');

Route::post('platform-merchants-table','IndustryEcommerceController@platform_merchants')->
name('industry.ecommerce.platformmerchants');


Route::post('platform-products','IndustryEcommerceController@openquantity')->
name('industry.ecommerce.platformpd');


Route::get('testsites/buyer', "IndustryEcommerceController@showBuyer")->name('platform.crm.buyer');
Route::get('testsites/company', "IndustryEcommerceController@showCompany")->name('platform.crm.company');
Route::get('testsites/company/datatable', "IndustryEcommerceController@showCompanyDatatable")->name('platform.company.datatable');
Route::get('testsites/buyer/datatable', "IndustryEcommerceController@showBuyerDatatable")->name('platform.buyer.datatable');

?>
