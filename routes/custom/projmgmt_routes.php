<?php
// Custom Project Routes

Route::get('project/{id}', 'ProjMgmtController@showProjectJob');
Route::post('projectmgmt-add', 'ProjMgmtController@store')->name('projmgmt.store');
Route::post('projectmgmt-delete', 'ProjMgmtController@delete')->name('projmgmt.delete');
Route::post('project-mgmt', 'ProjMgmtController@index')->name('projmgmt.index');

//Projet Jobs

Route::post('show-job-table', 'ProjMgmtController@showJobTable')->name('pjob.table.show');
Route::post('pjob-add', 'ProjMgmtController@PjobStore')->name('pjob.store');
Route::post('pjob-delete', 'ProjMgmtController@deletePjob')->name('pjob.delete');


Route::post('show-project-edit-modal', 'ProjMgmtController@showEditModal')->name('projmgmt.edit.modal');

Route::post('edit-project-name-model','ProjMgmtController@update')->name('projmgmt.name.update');

Route::get('job-cost/{id}', 'ProjMgmtController@showJobCost');

Route::get('job-raw-materials/{id}', 'ProjMgmtController@showJobRawMaterial');

Route::get('pm-get-rawmaterial/{job_id}', 'ProjMgmtController@getRawMaterial')->name("get-contractor-landing");
Route::post('pm-get-rawmaterial-fetch', 'ProjMgmtController@getRawMaterial_fetch')->name('getRawMaterial_fetch');
Route::post('pm-get-rawmaterial_popup_table', 'ProjMgmtController@rawmaterial_popup_table')->name('rawmaterial_popup_table');
Route::post('pm-get-service_popup_table', 'ProjMgmtController@service_popup_table')->name('service_popup_table');
Route::post('rawmaterial-popup-save-us',"ProjMgmtController@rawMaterial_togleActive")->name('rawMaterial.toggle_active');
Route::post('service-popup-save-us',"ProjMgmtController@save_contractor_service")->name('contractor.save_service');
Route::post('contactor-active-toggle',"ProjMgmtController@contactor_togleActive")->name('contractor.toggle_active');

Route::post('pjmgmt-upload-docs', 'ProjMgmtController@upload_doc')->name('pjmgmt.upload_doc');
Route::get('/{type}/{project_id}/document/{filename}',"ProjMgmtController@show_doc_");
Route::post('del-DOC-pm',"ProjMgmtController@delDOC")->name('projmgmt.del_doc_');
Route::post('edit-project-comp-model','ProjMgmtController@comp_update')->name('projmgmt.comp.update');


Route::post('uat-save',"ProjMgmtController@Pjobuat_new")->name('uat.save');
Route::post('uat-save-us',"ProjMgmtController@Pjobuat_togleActive")->name('uat.toggle_active');


//ProjMgmtGanttchartController
Route::get('ganttchart-pjob/{id}', 'ProjMgmtGanttchartController@ShowGPJobs')->name('ganttchart.pjobs');
Route::get('/ganttchart/api/pjob/fetch_data/{id}','ProjMgmtGanttchartController@GetGPJobs')->name('ganttchart.pjobs.get');

Route::get('ganttchart-prj/{id}', 'ProjMgmtGanttchartController@ShowGProj')->name('ganttchart.proj');
Route::get('/ganttchart/api/project/fetch_data/{p_d}','ProjMgmtGanttchartController@GetGProj')->name('ganttchart.proj.get');

Route::get('/ganttchart/api/overall/model','ProjMgmtGanttchartController@ShowGAll')->name('ganttchart.all');
Route::get('/ganttchart/api/overall/fetch_data','ProjMgmtGanttchartController@GetGAll')->name('ganttchart.all.get');

Route::get("/ganttchart/api/{date}/{data_type}",'ProjMgmtGanttchartController@GetDataSlider' )->name("ganttchart.data.slider");