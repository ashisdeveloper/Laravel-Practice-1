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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function(){
	return view('home');
});

// Route::get('/home','StudentController@Mother');
Route::get('/panel', function(){
	return view('layout');
});

Route::get('add-contact', 'ContactsController@addContact');
Route::post('insert-contact', 'ContactsController@insertContact');
Route::get('all-contacts', 'ContactsController@allContacts')->name('all.contact');
Route::get('delete-contact/{id}', 'ContactsController@deleteContact');