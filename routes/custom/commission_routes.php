<?php 
// Custom routes for Commission Scheme
   Route::get('show-commission-view',
	'CommissionController@showCommissionView')->
	name('landing.ajax.Commission');

//View Agent page
	Route::get('show-agent-view',
	'CommissionController@showAgentView')->
	name('landing.ajax.Agent');
//Redirect to agent page
	Route::get('/agent/{CompanyName}',
	'CommissionController@showAgent')->
	name('agent');

//Show company statement page
    Route::get('/company-statement',
	'CommissionController@showCompanySatement')->
	name('company-statement');

//Show personal statement page
    Route::get('/personal-statement',
	'CommissionController@showPersonalSatement')->
	name('personal-statement');

	Route::get('show-scheme-management-view',
	'CommissionController@showSchemeManagement')->
	name('landing.ajax.Scheme_management');

	Route::post('show-index-view',
	'CommissionController@index')->
	name('landing.ajax.index');

	Route::post('show-destroy-view',
	 'CommissionController@destroy')->
	name('landing.ajax.destroy');

   Route::get('show-agent-data',
	'CommissionController@showAgentData')->
	name('landing.ajax.Agent-Data');

   Route::post('show-add_agent',
	'CommissionController@add_agent')->
	name('landing.ajax.Add_agent');

   Route::post('update_company_name',
	'CommissionController@updateCompanyName')->
	name('landing.ajax.Update_company_name');
	
   Route::post('update_scheme_name',
	'CommissionController@updateSchemeName')->
	name('landing.ajax.Update_scheme_name');

	Route::post('update_comm_type',
	'CommissionController@updateType')->
	name('landing.ajax.Update_type');

	Route::post('show-destroy-agent',
	'CommissionController@destroyAgent')->
	name('landing.ajax.destroy.agent');

	Route::post('show-adit-agent',
	'CommissionController@updateAgentName')->
	name('landing.ajax.Update_agent_name');

	Route::post('show-adit-scheme_definition',
	'CommissionController@updateSchemeDefinition')->
	name('landing.ajax.Update_scheme_definition');

	Route::post('show-get-scheme_definition',
	'CommissionController@getSchemeDefinition')->
	name('landing.ajax.Get_scheme_definition');

	Route::get('show-get-scheme',
	'CommissionController@getScheme')->
	name('landing.ajax.get-scheme');
?>
