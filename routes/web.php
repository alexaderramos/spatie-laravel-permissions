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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('notes', 'NoteController@index')->name('notes');
Route::get('notes/create', 'NoteController@create')->name('notes.create');
Route::get('notes/{note}/edit', 'NoteController@edit')->name('notes.edit');
