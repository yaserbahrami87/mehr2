<?php


//festivals
Route::resource('festival','FestivalController');

//Pillars
Route::resource('pillar','PillarController');

//News
Route::resource('news','NewsController');

//Users
Route::post('/user/{user}/login','UserController@loginWithUser');
Route::resource('user','UserController');

//Comments
Route::resource('comment','CommentController');

//Gallery
Route::resource('gallery','GalleryController');

//Category Gallery
Route::resource('gallery_category','GalleryCategoryController');

//Contact Us
Route::resource('ContactUs','ContactUsController');

//RequestLink
Route::resource('RequestLink','RequestLinkController');

//competiton
Route::get('/competiton/{festival}/{competiton_category}','CompetitonController@category');
Route::get('/competiton/{festival}/{competiton_category}/download','CompetitonController@download');
Route::resource('competiton','CompetitonController');

//competiton_categories
Route::resource('competiton_category','CompetitonCategoryController');

//Material
Route::resource('material','MaterialController');

Route::get('/panel','AdminController@index');


