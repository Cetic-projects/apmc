<?php

use App\Enums\UserRoles;
use App\Models\Category;

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::get('tst',function(){
    $nodes = Category::get()->toTree();

$traverse = function ($categories, $prefix = '-') use (&$traverse) {
    foreach ($categories as $category) {
        echo PHP_EOL.$prefix.' '.$category->name;

        $traverse($category->children, $prefix.'-');
    }
};

$traverse($nodes);
});
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

    Route::post('orders/grouped-action', 'OrderController@groupedAction')->name('orders.grouped-action');
    Route::resource('orders', 'OrderController');

    Route::resource('banners', 'BannerController');
    Route::post('banners/grouped-action', 'BannerController@groupedAction')->name('banners.grouped-action');

    Route::resource('positions', 'PositionController');
    Route::post('positions/grouped-action', 'PositionController@groupedAction')->name('positions.grouped-action');

    Route::resource('unites', 'UniteController');
    Route::post('unites/grouped-action', 'UniteController@groupedAction')->name('unites.grouped-action');

    Route::resource('poles', 'PoleController');
    Route::post('poles/grouped-action', 'PoleController@groupedAction')->name('poles.grouped-action');


});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/2', function () {
    return view('welcome2');
});
