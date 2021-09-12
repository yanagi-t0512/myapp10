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

Route::get('/', 'HomeController@index')->name('welcome');

Route::get('/home', 'PagesController@getHome')->name('home');

Route::get('/contact', 'PagesController@getContact')->name('contact');

Route::get('/about', 'PagesController@getAbout')->name('about');

Route::get('/contact/messages', 'ContactController@getMessages')->name('get-messages');

Route::post('contact/submit', 'ContactController@submit')->name('contact-form-submit');

Route::resource('/todo', 'TodosController@index');
// Route::resource('/todo/create', 'TodosController@create');
Route::resource('todo', 'TodosController');

Auth::routes();
Route::get('/listings/top', 'ListingsController@top')->name('listings-top');
Route::resource('listings', 'ListingsController');
Route::get('/listings', 'ListingsController@index');
