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
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/contact', 'ContactController@sendMails')->name('contact_form');

Route::get('/cctv', 'ProductController@cctv')->name('cctv');
Route::get('/physical_intrusion', 'ProductController@physical_intrusion')->name('physical_intrusion');
Route::get('/access_control', 'ProductController@access_control')->name('access_control');
Route::get('/fire_detection', 'ProductController@fire_detection')->name('fire_detection');
Route::get('/bms', 'ProductController@building_management')->name('building_management');
Route::get('/csta', 'ProductController@cyber_security_training')->name('cyber_security_training');

Route::get('/contact', 'ProductController@contact')->name('contact');

