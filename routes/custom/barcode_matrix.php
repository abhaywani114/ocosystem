<?php
//Route::get('','BarcodeMatrixController@')->name('');
//Route::post('',"BarcodeMatrixController@")->name('');
Route::post('/settings/barcodematrix/maintable',"BarcodeMatrixController@main_table")->name('setting.barcode.maintabe');
Route::get('/settings/barcodematrix/matrixi/{id}',"BarcodeMatrixController@matrix_landing")->name('setting.barcode.matrix');
Route::post('/settings/barcodematrix/matrix/matrixtable', "BarcodeMatrixController@matrix_table")->name('setting.barcode.matrix.table');
Route::post('/settings/barcodematrix/attr/attrtable', "BarcodeMatrixController@attr_table")->name('setting.barcode.attr.table');
Route::get('/settings/barcodematrix/matrix/delete',"BarcodeMatrixController@matrix_delete")->name('setting.barcode.matrix.delete');

Route::get('/settings/barcodematrix/new',"BarcodeMatrixController@matrix_next")->name('setting.barcode.matrix.new');
Route::get('/settings/barcodematrix/updatecategory',"BarcodeMatrixController@update_category")->name('settings.barcode.matrix.updatecategory');
Route::get('/settings/barcodematrix/updatesubcategory',"BarcodeMatrixController@update_subcategory")->name('settings.barcode.matrix.updatesubcategory');
Route::get('/settings/barcodematrix/color/update', "BarcodeMatrixController@colour_update")->name('setting.barcode.color.update');
Route::post('/settings/barcodematrix/color/colortable', "BarcodeMatrixController@colour_table")->name('setting.barcode.color.table');
Route::get('/settings/barcodematrix/color/new', "BarcodeMatrixController@colour_new")->name('setting.barcode.color.new');
Route::get('/settings/barcodematrix/color/delete', "BarcodeMatrixController@colour_del")->name('setting.barcode.color.delete');

//matrix main
Route::get('/settings/barcodematrix/attrib/new', "BarcodeMatrixController@attrib_new")->name('setting.barcode.attrib.new');
Route::get('/settings/barcodematrix/attrib/updatename', "BarcodeMatrixController@update_name")->name('setting.barcode.attrib.rename');
Route::get('/settings/barcodematrix/attrib/matrixdelete', "BarcodeMatrixController@matrix_attr_delete")->name('setting.barcode.matrixdel.delete');

//attribute table
Route::get('/settings/barcodematrix/attribute/newattribue',"BarcodeMatrixController@attribute_new")->name('settings.barcode.attribute.new');
Route::get('/settings/barcodematrix/attribute/value',"BarcodeMatrixController@attribute_value")->name('settings.barcode.attribute.value');
Route::get('/settings/barcodematrix/attribute/del',"BarcodeMatrixController@attribute_delete")->name('settings.barcode.attribute.delete');

//generate barcode
Route::get('/settings/barcodematrix/generate',"BarcodeMatrixController@generate_bar_code")->name("settings.barcode.generate");
Route::get('/product/barcode/generate',"BarcodeMatrixController@generate_product_bar_code")->name("setting.barcode.product_generate");
Route::get('/product/barcode/delete',"BarcodeMatrixController@delete_product_bar_code")->name("setting.barcode.product_delete");
