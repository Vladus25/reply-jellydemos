<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Area Admin
Route::get('/admin', 'AdminController@alldata')->name('admin');

// Pagina home per gli Utenti
Route::get('/home','UserController@home') -> name('home');
