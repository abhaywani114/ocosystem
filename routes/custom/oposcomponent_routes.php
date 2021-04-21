<?php
/* Custom OPOSsum Component Routes */
Route::post('opossum-update-sst-gst-vat','OposComponentController@updateRate')->
name('opossum.dialog.updaterate');

Route::post('opossum-commit-transtion','OposComponentController@transition')->
name('opossum.commit.transition');

Route::post('opossum-check_product_stock','OposComponentController@check_product_stock')->
name('opossum.check_product_stock');

Route::post('opossum-special-show','OposComponentController@special_show')->
name('opossum.special_show');

Route::post('opossum-special-get','OposComponentController@special_get')->
name('opossum.special_append');

Route::post('discount-individual-item-dialog','OposComponentController@discount_individual_item')->
name('opossum.discount_individual_item');

Route::get('opossum-reciept_list/{id}','OposComponentController@reciept_list')->
name('opossum.reciept_list');

Route::post('opossum-reciept_view','OposComponentController@reciept')->
name('opossum.reciept');

Route::post('opossum-reciept_data','OposComponentController@reciept_data')->
name('opossum.reciept_data');

Route::post('opossum-reciept_print','OposComponentController@reciept_print')->
name('opossum.reciept_print');

Route::post('opossum-reciept_print_fast','OposComponentController@reciept_print_fast')->
name('opossum.reciept_print_fast');

Route::post('opossum-add_reciept_escpos_template','OposComponentController@add_reciept_escpos_template')->
name('opossum.add_reciept_escpos_template');

Route::post('opossum-add_kitchen_chit_escpos_template','OposComponentController@add_kitchen_chit_escpos_template')->
name('opossum.add_kitchen_chit_escpos_template');

Route::post('opossum-add_kitchen_chit_escpos_template_kiosk','OposComponentController@add_kitchen_chit_escpos_template_kiosk')->
name('opossum.add_kitchen_chit_escpos_template_kiosk');

Route::post('opossum-kitchen_print','OposComponentController@kitchen_print')->
name('opossum.kitchen_print');

Route::post('opossum-kitchen_print-kiosk','OposComponentController@kitchen_print_kiosk')->
name('opossum.kitchen_print.kiosk');

Route::post('opossum-open_bill_print','OposComponentController@open_bill_print')->
name('opossum.open_bill_print');

Route::post('opossum-eod','OposComponentController@opossum_eod')->
name('opossum.eod_view');

Route::post('opossum/store-daily-opt', 'OposComponentController@storeOPT')->
name('storeOPT');

Route::post('opossum-eod-print','OposComponentController@opossum_eod_print')->
name('opossum.eod_print');

Route::post('opossum-void_reciept','OposComponentController@opossum_void_reciept')->
name('opossum.void_reciept');

Route::post('opossum-takeaway','OposComponentController@opossum_takeaway')->
name('opossum.takeaway');

Route::post('opossum-update-pax','OposComponentController@opossum_update_pax')->
name('opossum.update.pax');

Route::post('opossum-takeaway-kiosk','OposComponentController@opossum_takeaway_kiosk')->
name('opossum.takeaway.kiosk');

Route::post('opossum-eod-update','OposComponentController@opossum_eod_update')->
name('opossum.eod_update');

Route::post('opossum/terminal/table/table_status','OposComponentController@table_status')->
name('opossum.table.status');

Route::post('opossum-branch_eod','OposComponentController@opossum_branch_eod')->
name('opossum.branch_eod');

Route::post('opossum-natural_eod','OposComponentController@opossum_natural_eod')->
name('opossum.natural_eod');

Route::post('terminal-saveLogo','OposComponentController@opossum_save_logo')->
name('terminal.save_logo');

Route::get('terminal-deleteLogo','OposComponentController@opossum_delete_logo')->
name('terminal.delete_logo');

Route::get('terminal-deleteLogoNotification','OposComponentController@opossum_delete_logo_notification')->
name('terminal.deletelogo_notification');

Route::get('terminal-check_logo_exist','OposComponentController@opossum_check_logo_exist')->
name('terminal.check_logo_exist');

Route::post('opossum-change-btype','OposComponentController@opossum_change_btype')->
name('opossum.change_btype');

Route::post('opossum-end_shift','OposComponentController@opossum_end_shift')->
name('opossum.end_shift');

Route::post('opossum-fuel-dippping','OposComponentController@fuelDippingCheck')->
name('opossum.fuel_dipping');

Route::post('opossum-fuel-dipping-update','OposComponentController@fuelDippingUpdate')->
name('opossum.fuel_dipping_update');

Route::post('/opossum/updatePumpDelivery','OposComponentController@pumpDeliveryUpdate')->
name('opossum.pump_delivery');
?>
