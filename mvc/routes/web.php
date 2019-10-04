<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontEnd.master');
});

Route::get('home', function () {
    return view('home');
});


Auth::routes();

    // Route::get('/', 'HomeController@index')->name('home');

    Route::resource('cities','CitiesController');
    Route::resource('categories','CategoriesController');
    Route::resource('foods','FoodsController');
    
Route::group(['prefix'=>'back'],function(){
    Route::get('/', 'Admin\DashboardController@index');
}

);
