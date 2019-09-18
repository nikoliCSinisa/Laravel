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
    return view('pages.home');
}) -> name('home-page');

Route::get('/about', function () {
    return view('pages.about');
}) -> name('about-page');

Route::get('/contact', function () {
    return view('pages.contact');
}) -> name('contact-page');

Route::get('/blog', function () {
    return view('pages.blog');
}) -> name('blog-page');
