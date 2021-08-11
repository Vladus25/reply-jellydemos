<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Pagina home per gli Utenti
Route::get('/home','UserController@home') -> name('home');

// Area Admin
Route::get('/admin', 'AdminController@alldata')->name('admin');

// Create
Route::get('/create/plate', 'AdminController@createPlate') -> name('createPlate');
Route::post('/store/plate', 'AdminController@storePlate') -> name('storePlate');
Route::get('/create/slide', 'AdminController@createSlide') -> name('createSlide');
Route::post('/store/slide', 'AdminController@storeSlide') -> name('storeSlide');
Route::get('/create/testimonial', 'AdminController@createTestimonial') -> name('createTestimonial');
Route::post('/store/testimonial', 'AdminController@storeTestimonial') -> name('storeTestimonial');

// Edit
Route::get('/edit/plate/{id}', 'AdminController@editPlate') -> name('editPlate');
Route::post('/update/plate/{id}', 'AdminController@updatePlate') -> name('updatePlate');
Route::get('/edit/slide/{id}', 'AdminController@editSlide') -> name('editSlide');
Route::post('/update/slide/{id}', 'AdminController@updateSlide') -> name('updateSlide');
Route::get('/edit/testimonial/{id}', 'AdminController@editTestimonial') -> name('editTestimonial');
Route::post('/update/testimonial/{id}', 'AdminController@updateTestimonial') -> name('updateTestimonial');

// Delete
Route::get('/delete/plate/{id}', 'AdminController@deletePlate') -> name('deletePlate');
Route::get('/delete/slide/{id}', 'AdminController@deleteSlide') -> name('deleteSlide');
Route::get('/delete/testimonial/{id}', 'AdminController@deleteTestimonial') -> name('deleteTestimonial');
