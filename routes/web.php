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
    return view('home');
});
Route::get('/plane', function () {
    return view('plane');
});
<<<<<<< HEAD
// Route::get('/editprofile', function () {
//     return view('editprofile');
// });
=======
<<<<<<< HEAD
=======
Route::get('/train', 'TrainController@index');

Route::get('/editprofile', function () {
    return view('editprofile');
});
>>>>>>> 8f2ce8053ec179a1d66ca197b53bb978e97d5916
>>>>>>> 94bdde8e22b7bb643f239bf0607cde13ce0d2fe4



Auth::routes();

// Users Verification
Route::get('/verifikasi', 'VerifikasiController@index')->name('verifikasi');
Route::get('/user/verify', 'VerifikasiController@confirm')->name('userverify');

Route::get('/testing', 'HomeController@index');
// Plane
Route::get('/flight' , 'FlightController@index')->name('plane');
Route::post('/flight/find' , 'FlightController@findPlane');

// train
// Route::get('/train', 'TrainController@index')->name('train');
Route::post('/train/find' , 'TrainController@findTrain');
Route::post('/train/booking/{id}' , 'BookingController@bookingView');
// Round Trip
Route::post('/train/booking/{idTrain1}/{idTrain2}' , 'BookingController@RoundTrip');
// Booking form
Route::post('/TrainBooking' , 'BookingController@BookingForm');
Route::post('/TrainBooking/roundtrip' , 'BookingController@BookingForm');
// view booking
Route::get('/bookinglist' , 'BookingController@listBooking');

// Payment
Route::get('/payment/{id_trainticket}', 'PaymentController@index');
Route::post('/payment/pay' , 'PaymentController@pay');


Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@index');
});
