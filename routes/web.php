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

Route::group(['middleware'=>'auth'], function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('notes', 'NoteController@index')->name('notes')->middleware('permission:notes.show');
    Route::get('notes/create', 'NoteController@create')->name('notes.create');
    Route::get('notes/{note}/edit', 'NoteController@edit')->name('notes.edit');

    Route::get('roles', 'RoleController@index')->name('roles');
    Route::get('roles/create', 'RoleController@create')->name('roles.create');
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
    Route::post('roles/store', 'RoleController@store')->name('roles.store');
    Route::put('roles/update/{role}', 'RoleController@update')->name('roles.update');

    Route::get('permissions', 'PermissionController@index')->name('permissions');
    Route::get('permissions/create', 'PermissionController@create')->name('permissions.create');
    Route::get('permissions/{permission}/edit', 'PermissionController@edit')->name('permissions.edit');
    Route::post('permissions/store', 'PermissionController@store')->name('permissions.store');

    Route::get('users','UserController@index')->name('users');
    Route::get('users/create','UserController@create')->name('users.create');
    Route::get('users/{user}/edit','UserController@edit')->name('users.edit');
    Route::get('users/store','UserController@create')->name('users.store');
    Route::put('users/update/{user}','UserController@update')->name('users.update');

});


Route::group(['middleware'=>'auth:students'],function (){
    Route::get('students/area', 'StudentController@area');
});


//Rutas para autenticacion de studiantes

    Route::get('students/login','AuthStudents\LoginStudentController@showLoginForm')->name('students.login');
    Route::post('students/login','AuthStudents\LoginStudentController@login');
    Route::post('students/logout','AuthStudents\LoginStudentController@logout')->name('students.logout');





