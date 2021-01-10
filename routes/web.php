<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'halamanController@homepage')->name('homepage');
Route::get('{path}', 'halamanController')->where('path', '(.*)');