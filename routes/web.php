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

use App\DCMeter;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/setMeterState', function (){$vrm_id = '0cae7d0df73d'; $meters = DCMeter::all(); return view('setState', compact(['vrm_id', 'meters']));})->middleware('auth');
Route::get('/setMeterState/{vrm_id}/{meter_id}/{desired_state}', 'MeterStateController@setState')->middleware('auth');
Route::get('/getMeterState', 'MeterStateController@getState')->middleware('auth');
