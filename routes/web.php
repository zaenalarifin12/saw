<?php

use Illuminate\Support\Facades\Auth;
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


// Auth::routes();

// Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


// Route::middleware(['auth'])->group(function () {

    Route::get('/'  , 'HomeController@index');

//     Route::get('/home', 'HomeController@index')->name('home');


//     Route::get('/user',         'UserController@index');
//     Route::post('/user',        'UserController@store');
//     Route::put('/user/{id}',    'UserController@update');
//     Route::get('/user/{id}',    'UserController@delete');


    Route::get('/hp',         'RestoController@index');
    Route::post('/hp',        'RestoController@store');
    Route::put('/hp/{id}',    'RestoController@update');
    Route::get('/hp/{id}',    'RestoController@delete')->name("resto.destroy");
// });

// Route::get('/api/resto', 'ApiRestoController@index');

// Route::get('/api/kunjungan/{id}', 'ApiRestoController@kunjungan');

Route::get("/calculasi", "AlternatifController@calculasi");