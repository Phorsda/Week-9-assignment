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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/property', 'HomeController@property')->name('property');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/propertysingle', 'HomeController@propertysingle')->name('propertysingle');
Route::get('/blogsingle', 'HomeController@blogsingle')->name('blogsingle');
Route::get('/agent', 'HomeController@agent')->name('agent');
Route::get('/agentsingle', 'HomeController@agentsingle')->name('agentsingle');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
