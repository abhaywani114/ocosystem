<?php
    Route::get('mob/user/{id}', 'MobUserController@show');
    Route::get('mob/personal/{user}', 'MobUserController@personal')->name('mob.user.personal'); 

    Route::get('mob/scanner', 'MobUserController@scanner')->name('mob.user.scanner'); 

    Route::get('mob/repair-maintenance', 'MobUserController@repair_and_maintenance')
    ->name('mob.user.repair_and_maintenance');

    Route::get('mob/repair-maintenance/list', 'MobUserController@repair_and_maintenance_item')
    ->name('mob.user.repair_and_maintenance.list');

    Route::get('mob/repair-maintenance-form/{id}', 'MobUserController@repair_and_maintenance_form')
    ->name('mob.user.repair_and_maintenance.form');

    Route::post('mob/repair-maintenance-form-update', 'MobUserController@repair_and_maintenance_form_update')
    ->name('mob.user.repair_and_maintenance.form.update');

    Route::get('mob/repair-maintenance-form-add/{cmrform_id}', 'MobUserController@repair_and_maintenance_form_add')
    ->name('mob.user.repair_and_maintenance.form.add');

    Route::post('mob/repair-maintenance-form-add-parts', 'MobUserController@repair_and_maintenance_form_add_parts')
    ->name('mob.user.repair_and_maintenance.form.add.parts');

    Route::post('mob/repair-maintenance-form-add-parts-update', 'MobUserController@repair_and_maintenance_form_add_parts_update')
    ->name('mob.user.repair_and_maintenance.form.add.parts.update');

    Route::delete('mob/repair-maintenance-form-destroy-parts/{id}', 'MobUserController@repair_and_maintenance_form_destroy_parts')
    ->name('mob.user.repair_and_maintenance.form.destroy.parts');
   
    // Route::get('mob/user/pwd_chnage', 'MobUserController@changePwd');