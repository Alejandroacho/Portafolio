<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/trace', 'projects.trace');
Route::view('/blog', 'projects.blog');
Route::view('/sudoku', 'projects.sudoku');
Route::view('/kvirus', 'projects.kvirus');
Route::view('/katas', 'projects.katas');
Route::view('/notalone', 'projects.notalone');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
