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
    return view('welcome');
});

//  Route for auth_sort() function (needs to stay above books resource
Route::get('books/auth_sort','BookController@auth_sort');

/* uses resource to create full route compliment for all crud routes*/
Route::resource('books','BookController');


/* Auth routes */
Auth::routes();
/* Auto generated while working through build params*/
Route::get('/home', 'HomeController@index')->name('home');


