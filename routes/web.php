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
Route::get('/contact','FrontendController@index');
Route::get('/track-parcel','FrontendController@Showtracking');
Route::get('/about-us','FrontendController@Aboutus');
Route::get('/services','FrontendController@services');

Route::post('/contact-process','ContactController@store')->name('contact.store');
Auth::routes();
// ['register' => false]
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','HomeController@logout');

Route::get('track-order','WebController@track_order')->name('track_order');

// Route::group(['middleware' => 'auth']{
   

// });
Route::group(['middleware'=> ['admin']],function(){
    Route::get('/admin/dashboard', 'AdminController@index')->name('admin');
    Route::resource('parcel','ParcelController');
    Route::post('/add-log', 'ParcelController@add_log')->name('add_log');
    Route::post('/delete-log/{id}', 'ParcelController@delete_log')->name('delete_log');
    
});