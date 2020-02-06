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

Route::post('/employee/create','examController@createEmployee')->name('createEmployee');
Route::get('/','examController@retrievedNames')->name('names');
Route::get('/employee/{id}','examController@showform')->name('update');
Route::get('/updateclockin','examController@updateClockIn')->name('updateclockIn');

// <!-- // hours left real time 6-9
// // dili macclick ang end if wla na start
// // wlay labot ang time break
// // dili na apil ang break sa total time work -->
