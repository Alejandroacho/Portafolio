<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/trace', 'projects.construccion');
Route::view('/blog', 'projects.construccion');
Route::view('/sudoku', 'projects.construccion');
Route::view('/kvirus', 'projects.construccion');
Route::view('/katas', 'projects.construccion');
Route::view('/notalone', 'projects.construccion');
/*Route::view('/trace', 'projects.trace');
Route::view('/blog', 'projects.blog');
Route::view('/sudoku', 'projects.sudoku');
Route::view('/kvirus', 'projects.kvirus');
Route::view('/katas', 'projects.katas');
Route::view('/notalone', 'projects.notalone');*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
