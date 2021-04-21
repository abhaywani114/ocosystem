<?php


Route::get('show-setting-view',
	'HomeController@showSettingView')->
	name('landing.ajax.Setting');

Route::get('show-generalsetting-view',
    'SettingController@general')->
name('landing.ajax.generalSetting');

Route::get('show-Loyalty-programme-view',
    'SettingController@loyalty_programme')->
name('landing.ajax.loyalty_programme');

Route::post('show-Loyalty-programme-update',
    'SettingController@loyalty_programme_update')->
name('loyalty_programme.update');


Route::get('show-country-view',
	'CountryController@showCountryView')->
	name('landing.ajax.Country');

Route::post('update-country-view',
	'CountryController@updateCountry')->
	name('country.update');

Route::post('update-currency-view',
	'CountryController@updateCurrency')->
	name('currency.update');

Route::get('show-HeaderFooter-view',
	'HomeController@HeaderFooter')->
	name('landing.ajax.HeaderFooter');
Route::get('show-Barcode-view',
	'SettingController@barcode')->
	name('landing.ajax.Barcode');
Route::post('save-Barcode-view',
    'SettingController@savebarcode')->
name('landing.ajax.saveBarcode');
Route::get('show-function-view',
	'HomeController@function')->
	name('landing.ajax.function');

Route::get('show-settings-view',
	'HomeController@showSettingView')->
	name('landing.ajax.settings');

Route::post('get-OH-model',
	'OrganisationHierarchyController@showModel')->
	name('oH.getdata');

Route::post('del-OH-model-aa',
	'OrganisationHierarchyController@destory')->
	name('OH.deletedata');


Route::post('submit-OH-model',
	'OrganisationHierarchyController@store')->
	name('oH.submitData');

Route::get('show-HeaderFooter-view',
	'HomeController@HeaderFooter')->
	name('landing.ajax.HeaderFooter');

// Route::get('show-campaign-view','HomeController@showCompaignView')->name('landing.ajax.campaign');



Route::get('show-settings-view', 'HomeController@showSettingView')->name('landing.ajax.settings');

Route::get('show-companydetails-editForm', 'SettingController@companyEditForm')->name('companydetails.editForm');

Route::post('show-companydetails-saveForm', 'SettingController@companySaveForm')->name('companydetails.saveForm');

Route::post('show-companydetails-saveLogo', 'SettingController@companySaveLogo')->name('companydetails.saveLogo');

Route::post('show-companydetails-saveNRIC', 'SettingController@companySaveNRIC')->name('companydetails.saveNRIC');

Route::get('/logo/{company_id}/{filename}',"SettingController@showLogo");

Route::get('/company/{company_id}/attachment/{attachment_id}/{filename}',"SettingController@showNRIC");

Route::get('del-logo',"SettingController@delLogo")->name('settings.delLogo');

Route::post('del-NRIC',"SettingController@delNRIC")->name('settings.delNRIC');

Route::get('Receipt-Address',"SettingController@receipt_address")->name('settings.Receipt-Address');
Route::get('Receipt-Type',"SettingController@receipt_type")->name('settings.Receipt-Type');
Route::get('Kitchen-Type',"SettingController@kitchen_type")->name('settings.Kitchen-Type');
Route::get('Print-Mode',"SettingController@print_mode")->name('settings.Print-Mode');
Route::get('Printer-Format',"SettingController@printer_format")->name('settings.Printer-Format');


Route::post('/settings/headerfooter/update',
 	  'SettingController@updateHeaderFooter')->
name('landing.ajax.updateHeaderFooter');

?>
