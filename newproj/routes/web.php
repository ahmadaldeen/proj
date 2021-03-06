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


Route::get('/', 'Homecontroller@index')->name('home.home');
Route::get('/a', 'adminController@index')->name('home.admin');
Route::get('/g', 'adminController@index1')->name('home.adminp');
Route::get('/q',function() {
   return view('welcome');
})->name('home');

Route::get('/b', 'adminController@index2')->name('home.adminh');
Route::get('/z', 'adminController@index3')->name('home.admini');
Route::get('/c', 'adminController@show')->name('show.show');

Route::get('/header', 'adminController@header')->name('admin.header');
Route::post('/header', 'adminController@header')->name('admin.header');
Route::get('header/deleteh/{id}', 'adminController@deleteh')->name('admin.header.deleteh');
Route::post('header/deleteh/{id}', 'adminController@deleteh')->name('admin.header.deleteh');
Route::get('header/updateh/{id}', 'adminController@updateh')->name('admin.header.updateh');
Route::post('header/updateh/{id}', 'adminController@updateh')->name('admin.header.updateh');


Route::get('/info', 'adminController@info')->name('admin.info');
Route::post('/info', 'adminController@info')->name('admin.info');
Route::get('info/deletei/{id}', 'adminController@deletei')->name('admin.info.deletei');
Route::post('info/deletei/{id}', 'adminController@deletei')->name('admin.info.deletei');
Route::get('info/updatei/{id}', 'adminController@updatei')->name('admin.info.updatei');
Route::post('info/updatei/{id}', 'adminController@updatei')->name('admin.info.updatei');

Route::get('/parfun', 'adminController@parfun')->name('admin.parfun');
Route::post('/parfun', 'adminController@parfun')->name('admin.parfun');
Route::get('parfun/deletep/{id}', 'adminController@deletep')->name('admin.parfun.deletep');
Route::post('parfun/deletep/{id}', 'adminController@deletep')->name('admin.parfun.deletep');
Route::get('parfun/updatep/{id}', 'adminController@updatep')->name('admin.parfun.updatep');
Route::post('parfun/updatep/{id}', 'adminController@updatep')->name('admin.parfun.updatep');
