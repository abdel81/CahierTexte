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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/prof', 'ProfController@index')->name('prof')->middleware('prof');
Route::get('/super', 'SuperController@index')->name('super')->middleware('super');

