<?php

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

// Route for USER
Route::resource('user', 'UserController');
Route::get('user', 'UserController@index')
    ->name('user.index');
Route::get('user/user{id}/edit', 'UserController@edit')
    ->name('user.edit');
Route::get('user/profile', 'UserController@profile')
    ->name('user.profile');
Route::get('user/{user}/destroy', 'UserController@destroyForm');
//TODO : ajouter un middleware pour la sécurisation des routes

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');
Route::get('/', 'HomeController@index')
    ->name('home');

