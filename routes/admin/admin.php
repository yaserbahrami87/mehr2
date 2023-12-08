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

    //Settings
    Route::prefix('setting')->group(function () {
    Route::get('/basic','SettingController@basic_create');
    Route::post('/basic','SettingController@basic');
        Route::prefix('sliders_home')->group(function () {
            Route::get('/', 'SettingController@sliders_home');
            Route::post('/', 'SettingController@sliders_home_store');
            Route::get('/{setting}/edit', 'SettingController@sliders_home_edit');
            Route::patch('/{setting}', 'SettingController@sliders_home_update');
            Route::delete('/{setting}', 'SettingController@sliders_home_destory');
        });

        Route::prefix('colleagues')->group(function () {
            Route::get('/', 'SettingController@colleagues');
            Route::post('/', 'SettingController@colleagues_store');
            Route::get('/{setting}/edit', 'SettingController@colleagues_edit');
            Route::patch('/{setting}', 'SettingController@colleagues_update');
            Route::delete('/{setting}', 'SettingController@colleagues_destory');
        });

});
//Route::resource('setting','SettingController');

Route::get('/panel','AdminController@index');


