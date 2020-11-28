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

Route::get('/', 'PropertyController@home');

Route::get('/property-single', function () {
    return view('property-single');
});

Route::get('/add_property/{id}', 'PropertyController@index');
Route::post('/create_property/{id}', 'PropertyController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
