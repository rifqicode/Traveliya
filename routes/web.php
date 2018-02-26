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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('welcome');
});
Route::get('/pesawat', function () {
  flash('test');
    return view('pesawat');
});
Route::get('/kereta', function () {
    return view('trains');
});



Auth::routes();

Route::get('/verifikasi', 'VerifikasiController@index')->name('verifikasi');

Route::get('/user/verify', 'VerifikasiController@confirm')->name('userverify');

Route::get('/home', 'HomeController@index')->name('home');
// Plane
Route::get('/flight' , 'FlightController@index')->name('plane');
Route::post('/flight/find' , 'FlightController@findPlane');

// train
Route::get('/train', 'TrainController@index')->name('train');
Route::post('/train/find' , 'TrainController@findTrain');
Route::post('/train/booking/{id}' , 'BookingController@bookingView');
// Round Trip
Route::post('/train/booking/{idTrain1}/{idTrain2}' , 'BookingController@RoundTrip');
// Booking form
Route::post('/TrainBooking' , 'BookingController@BookingForm');
Route::post('/TrainBooking/roundtrip' , 'BookingController@BookingForm');
