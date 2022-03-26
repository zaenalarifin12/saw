<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/'  , 'HomeController@index');

Route::get('/hp',         'AlternatifController@index');
Route::post('/hp',        'AlternatifController@store');
Route::put('/hp/{id}',    'AlternatifController@update');
Route::get('/hp/{id}',    'AlternatifController@delete')->name("resto.destroy");

Route::post("/calculasi", "CalculasiController@calculasi");

Route::get("/compare",          "CompareController@index");
Route::post("/compare/{id}",    "CompareController@store");
Route::delete("/compare/{id}",  "CompareController@delete");


