<?php

use App\Enums\UserRoles;

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::get('/local/{local}', 'LocalController@switchLocal')->name('change.language');
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware' => ['auth', 'role:' . App\Enums\UserRoles::SuperAdmin . '|'.App\Enums\UserRoles::Admin]], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
    

    Route::group(['middleware' => ['role:'.App\Enums\UserRoles::SuperAdmin ,'permission: category-index|category-store']], function () {
        Route::post('categories/grouped-action', 'CategoryController@groupedAction')->name('categories.grouped-action');
        Route::resource('categories', 'CategoryController');
    });

    Route::post('posts/grouped-action', 'PostController@groupedAction')->name('posts.grouped-action');
    Route::resource('posts', 'PostController');

    Route::resource('banners', 'BannerController');
    Route::post('banners/grouped-action', 'BannerController@groupedAction')->name('banners.grouped-action');

    Route::resource('positions', 'PositionController');
    Route::post('positions/grouped-action', 'PositionController@groupedAction')->name('positions.grouped-action');

    
});

Route::get('/', function () {
    return view('welcome');
});
