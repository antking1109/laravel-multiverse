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

Route::get('/', 'SiteController@index')->name('index');
Route::post('mess/send', 'SiteController@addFeedback');
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

/*
| All Router In Admin Cpanel
*/
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/image', 'ImageController@getAllInAdmin')->name('manage-image');

Route::get('/admin/image/add', 'ImageController@getAddImage')->name('add-image');
Route::post('/admin/image/add', 'ImageController@postAddImage')->name('post-add-image');

Route::get('/admin/image/edit/{id}', 'ImageController@getEditImage')->name('get-edit-image');
Route::post('/admin/image/edit/{id}', 'ImageController@postEditImage')->name('post-edit-image');

Route::get('/admin/image/delete/{id}', 'ImageController@deleteImage')->name('delete-image');

Route::get('/admin/user/{id}', 'AdminController@getUser')->name('get-user');
Route::post('/admin/user/{id}', 'AdminController@postUser')->name('post-user');

Route::get('/admin/setting', 'AdminController@getSetting')->name('get-setting');
Route::post('/admin/setting', 'AdminController@postSetting')->name('post-setting');