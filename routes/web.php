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

Route::get('/', 'FrontEndController@page') -> name('home-page');

Route::get('/about', 'FrontEndController@page') -> name('about-page');

Route::get('/contact', 'FrontEndController@page') -> name('contact-page');

Route::get('/blog', 'FrontEndController@page') -> name('blog-page');
