<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/project-details', 'projects.portfolio-details');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
