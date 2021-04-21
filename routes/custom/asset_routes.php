<?php 
// Custom routes for Asset Management 
    Route::get('asset-management-view', 'AssetController@show_asset')->name('asset_management_ajax_view'); //->middleware('CheckRole:onlyuser');
    Route::resource('assets','OGAssetMgmtController');

?>
