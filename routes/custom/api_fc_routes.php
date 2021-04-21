<?php
Route::get("/fc/api/push", "APIFcController@push_fc")->name('push_api');
Route::post("/fc/api/sendpayload", "APIFcController@sendPayload")->name('send_payload');
Route::post("/fc/api/sendpayloadcustom", "APIFcController@sendPayloadCustom")->name('send_payload_custom');
