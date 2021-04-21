<?php
Route::get( 'superadmin/external/landing','ExternalController@landing')->
	name('super_admin.external.landing');

Route::post( 'superadmin/external/main_datatable','ExternalController@mainDatatable')->
	name('super_admin.external.main_datatable');


Route::post( 'superadmin/external/add_new_external_user','ExternalController@addExternalUser')->
	name('super_admin.external.add_new_user');

Route::get( 'superadmin/external/oceania_authorization/{id}','ExternalController@viewOceaniaAuthorization')->
	name('super_admin.external.auth_user');

Route::post( 'superadmin/external/oceania_authorization/data_table','ExternalController@oceaniaAuthorizationDatatable')->
	name('super_admin.external.auth_user.datatable');


Route::post( 'superadmin/external/oceania_authorization/activate_user', 'ExternalController@oceaniaAuthorizationActivateUser')->
	name('super_admin.external.auth_user.activate_user');

Route::post( 'superadmin/external/oceania_authorization/toggle_active_all', 'ExternalController@oceaniaAuthorizationToggleActive')->
	name('super_admin.external.auth_user.toggle_active_all');
?>
