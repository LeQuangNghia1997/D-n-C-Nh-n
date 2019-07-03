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
    return view('welcome');
});


Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


    Route::get('contact','ContactController@index')->name('contact.index');
    Route::get('contact/{id}','ContactController@show')->name('contact.show');
    Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');




// Registration Routes...
    Route::get('/register/', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register/', 'Auth\RegisterController@register');
    Route::get('/', 'HomeController@index')->name('home');
    Route::prefix('/users')->group(function () {
        Route::get('/', 'UserController@index')->name('users.index');
        Route::get('/create', 'UserController@create')->name('users.create');
        Route::post('/create', 'UserController@store')->name('users.store');
        Route::get('/{id}/delete', 'UserController@destroy')->name('users.destroy');
        Route::get('/{id}/update', 'UserController@update')->name('users.update');
        Route::post('/{id}/update', 'UserController@edit')->name('users.edit');
    });
    Route::prefix('/categories')->group(function () {
        Route::get('/create', 'CategoryController@create')->name('categories.create');
        Route::post('/create', 'CategoryController@store')->name('categories.store');
        Route::get('/', 'CategoryController@index')->name('categories.index');
        Route::get('/{id}/delete', 'CategoryController@destroy')->name('categories.destroy');
        Route::get('/{id}/update', 'CategoryController@update')->name('categories.update');
        Route::post('/{id}/update', 'CategoryController@edit')->name('categories.edit');
    });
    Route::prefix('/food')->group(function () {
        Route::get('/create', 'FoodController@create')->name('food.create');
        Route::post('/create', 'FoodController@store')->name('food.store');
        Route::get('/', 'FoodController@index')->name('food.index');
        Route::get('/{id}/delete', 'FoodController@destroy')->name('food.destroy');
        Route::get('/{id}/update', 'FoodController@update')->name('food.update');
        Route::post('/{id}/update', 'FoodController@edit')->name('food.edit');
    });
    Route::prefix('/pots')->group(function () {
        Route::get('/create', 'PotsController@create')->name('pots.create');
        Route::post('/create', 'PotsController@store')->name('pots.store');
        Route::get('/', 'PotsController@index')->name('pots.index');
        Route::get('/{id}/delete', 'PotsController@destroy')->name('pots.destroy');
        Route::get('/{id}/update', 'PotsController@update')->name('pots.update');
        Route::post('/{id}/update', 'PotsController@edit')->name('pots.edit');
    });
    Route::prefix('/menu')->group(function () {
        Route::get('/danhsach', 'ShowController@showMenu')->name('showmenu');
        Route::get('/blog', 'ShowController@showBlog')->name('blog');
        Route::get('/contact', 'ShowController@showContact')->name('contact');
        Route::get('/single', 'ShowController@showSingle')->name('single');
        Route::get('/', 'ShowController@showIndex')->name('show.index');
    });
    Route::prefix('/table')->group(function () {
        Route::get('/create', 'TableController@create')->name('table.create');
        Route::post('/create', 'TableController@store')->name('table.store');
        Route::get('/', 'TableController@index')->name('table.index');
        Route::get('/{id}/delete', 'TableController@destroy')->name('table.destroy');
        Route::get('/{id}/update', 'TableController@update')->name('table.update');
        Route::post('/{id}/update', 'TableController@edit')->name('table.edit');
        Route::get('/table', 'TableController@showTable')->name('table.show');
        Route::get('/resvervation','TableController@showReservation')->name('show.reservation');


        });

    Route::post('/reservation','ReservationController@reserve')->name('reservation.reserve');
    Route::post('/contact','ContactController@sendMessage')->name('contact.send');
    Route::prefix('/reservation')->group(function () {
        Route::get('reservation','ReservationController@index')->name('reservation.index');
        Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
        Route::delete('reservation/{id}','ReservationController@destory')->name('reservation.destory');
    });
});



