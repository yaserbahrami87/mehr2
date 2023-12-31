<?php

Route::get('/','HomeController@index');

//competition
Route::resource('competiton','CompetitonController');

Route::get('/competition_category/{competiton_category}','CompetitonCategoryController@show');

//Request Link
Route::resource('RequestLink','RequestLinkController');


Route::prefix('english')->group(function()
{
    //dashboard
    Route::get('/','HomeController@index_en');

    //competition
    Route::get('/competiton/{competiton}/edit','CompetitonController@edit_en');
    Route::get('/competiton/create','CompetitonController@create_en');
//    Route::resource('competiton','CompetitonController');
});

