<?php

	Route::post('get-addProd_data-model',
	'ProductCategoriesController@showModel')->
	name('productsetting.addProd_data');

	Route::post("add-productsetting-subcategory",
	'ProductCategoriesController@addSubcategory')->
	name('productsetting.addProd_data.add.subcategory');

	Route::post("add-productsetting-category",
	'ProductCategoriesController@addcategory')->
	name('productsetting.addProd_data.add.category');

	Route::post("add-productsetting-product",
	'ProductCategoriesController@addproduct')->
	name('productsetting.addProd_data.add.product');

	Route::post("add-productsetting-brand",
	'ProductCategoriesController@addbrand')->
	name('productsetting.addProd_data.add.brand');
	
	Route::get("get-productsetting-dropdown/{type}/{key}",
	'ProductCategoriesController@get_dropDown')->
	name('productsetting.get_dropDown');

		Route::post('get-deleteProd_data-delete',
	'ProductCategoriesController@delete')->
	name('productsetting.deletedata');
?>
