<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/project-details', function () {
    return view('projects.portfolio-details');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
