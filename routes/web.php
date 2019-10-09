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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', 'ReCaptchaController@showLogin')->name('show-login');
Route::get('/success', 'ReCaptchaController@showSuccess')->name('show-success');
Route::post('/login', 'ReCaptchaController@login')->name('login');

