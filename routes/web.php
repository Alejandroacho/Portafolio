<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');


Route::view('/trace', 'projects.trace');
Route::view('/notalone', 'projects.notalone');
Route::view('/kvirus', 'projects.kvirus');
Route::view('/katas', 'projects.katas');
Route::view('/alumni', 'projects.alumni');
Route::view('/sudoku', 'projects.sudoku');

Route::resource('/task', 'TaskController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
