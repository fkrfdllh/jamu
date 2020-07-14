<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HerbController@getSlideShow')->name('home');

Auth::routes();

Route::get('/profil', function () {
    return view('profile.index');
})->name('profile');

Route::get('/jamu', 'HerbController@index')->name('jamu');

Route::get('/jamu/cari', function () {
    return view('herb.search');
})->name('jamu.cari');

Route::get('/jamu/search', 'HerbController@search')->name('jamu.search');
Route::get('/jamu/add', 'HerbController@add')->name('jamu.add');
Route::get('/jamu/{id}', 'HerbController@detail')->name('jamu.detail');

Route::post('jamu/create', 'HerbController@create')->name('jamu.create');
