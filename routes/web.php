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

Auth::routes();

Route::get('/', function () {return view('front.home.home');})->name('home');

Route::get('/agency', 'AgencyController@getAllAgencies')->name('agency');
Route::get('/agency/detail/{id}', 'AgencyController@getAgencyDetailById')->name('agency.detail');

Route::get('/extension', 'ExtensionController@getAllExtensions')->name('extension');
Route::get('/extension/detail/{id}', 'ExtensionController@getExtensionById')->name('extension.detail');

Route::get('/movie', function () {return view('front.movie.movie-total');})->name('movie');
Route::get('/movie/detail', function () {return view('front.movie.movie-detail');})->name('movie.detail');
Route::get('/movie/search', function () {return view('front.movie.movie-search');})->name('movie.search');

Route::get('/menu', function () {return view('front.menu.menu-total');})->name('menu');

Route::get('/news', function () {return view('front.news.news-total');})->name('news');
Route::get('/news/detail', function () {return view('front.news.news-detail');})->name('news.detail');
Route::get('/news/promo', function () {return view('front.news.promo');})->name('promo');
Route::get('/news/hiring', function () {return view('front.news.hiring');})->name('hiring');

Route::get('/room-order', 'RoomOrderController@create')->name('room.order');
Route::post('/room-order', 'RoomOrderController@store')->name('room.order.store');

Route::get('/room-price', function () {return view('front.room-price.room-price-total');})->name('room.price');

Route::get('/profile', function () {return view('front.user.user-detail');})->name('user.profile');


// route back for admin
Route::get('/admin', 'AgencyController@index');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('agencies', 'AgencyController');
    Route::resource('extensions', 'ExtensionController');
    Route::resource('movies', 'MovieController');
    Route::resource('movie-categories', 'MovieCategoryController');
    Route::resource('newses', 'NewsController');
    Route::resource('menus', 'MenuController');
    Route::resource('room-prices', 'RoomPriceController');
    Route::resource('room-orders', 'RoomOrderController')->only([
        'index', 'show', 'destroy'
    ]);
});



// route test
//Route::get('/test/{id}', 'AgencyController@getContentAgencyById');
