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

Route::get('/', 'HomeController@index');




Route::get('/index',"PagesController@get_index");

Route::get('/about',"PagesController@get_about");

Route::get('/contact',"PagesController@get_contact");

Route::resource('posts',"PostController");










