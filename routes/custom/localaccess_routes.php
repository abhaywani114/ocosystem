<?php
	// Custom route for Local Access
	Route::any('/localaccess/interface/licence-activate', 'LocalAccessController@licenceInterface')->name('localaccess.interface.licence');
	Route::any('/localaccess/interface/licence-activate-terminal', 'LocalAccessController@licenceInterfaceTerminal')->name('localaccess.interface.licence-terminaL');
	Route::post('/localaccess/getMarchandLinkRelationForOceaniaDb', 'CreditActController@getMerchantLinkRelationForOceaniaDb')->name('localaccess.getMarchandLinkRelationForOceaniaDb');

?>
