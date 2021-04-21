<?php
//Route::resource('terminal', 'TerminalController');
Route::get('terminal-master', 'TerminalController@terminalMaster')->name('terminal_master.landing');
Route::post('terminal-master/datable', 'TerminalController@landingDatatable')->name('terminal.landing_datatable');
Route::post('terminal-master/update-threshold','TerminalController@updateTCount')->name('terminal.update_threshold');
Route::post('terminal-master/reset-terminal-hardware','TerminalController@resetHardwareTerminal')->name('terminal.reset_hardware');
Route::post('terminal-master/update-terminal-r-count','TerminalController@updateRecieptCount')->name('terminal.r_count');
?>
