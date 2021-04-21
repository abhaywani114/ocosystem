<?php
/* Custom Partner Routes */
Route::resource('individual', 'IndividualController');
Route::post('show-individual-edit-modal', 'IndividualController@showEditModal')->name('individual.edit.modal');
Route::post('update-individual-data', 'IndividualController@updateIndividualFields')->name('individual.edit.update');
Route::post('update-individual-status', 'IndividualController@updateIndividualStatus')->name('individual.edit.status.update');
?>

