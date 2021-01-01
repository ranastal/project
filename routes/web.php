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

Route::get('/', function (){
	return view ('front.home');

});

Route::get('contact', function(){
	return view ('front.contact');

});

Route::get('blog', function(){
	return view ('front.blog');

});

Route::get('album', function(){
	return view ('front.album');

});


Route::get('about', function(){
	return view ('front.about');

});