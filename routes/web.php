<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Welcome@index'); 
    
Route::get('admin', "Admin@index");

Route::get('boatramp', 'BoatRamp@index');

Route::get('cabinLease', 'CabinLease@index');

Route::get('cabins', 'Cabins@index');

Route::get('contact', 'Contact@index');

Route::get('currentWeather', 'CurrentWeather@index');

Route::get('localWeather', 'LocalWeather@index');

Route::get('makeReservation', 'MakeReservation@index');

Route::get('meetCalhoun', 'MeetCalhoun@index');

Route::get('rates', 'Rates@index');

Route::get('rvSiteAgreement', 'RvSiteAgreement@index');

?>

