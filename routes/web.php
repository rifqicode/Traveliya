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

 Route::get('/editprofile', function () {
     return view('editprofile');
 });

// Route::get('/editprofile', function () {
//     return view('editprofile');
// });

Route::get('/train', 'TrainController@index');

Route::get('/editprofile', function () {
    return view('editprofile');
});




Auth::routes();

// Users Verification
Route::get('/verifikasi', 'VerifikasiController@index')->name('verifikasi');
Route::get('/user/verify', 'VerifikasiController@confirm')->name('userverify');

//testing
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
Route::get('/payment/showticket/{id_trainticket}', 'PaymentController@showticket');
Route::post('/payment/pay' , 'PaymentController@pay');
Route::get('/payment/pay/showpay/{id_trainticket}' , 'PaymentController@showpay');
Route::get('/payment/pay/{code}' , 'PaymentController@apiPayment');


Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {

    Route::get('/', 'AdminController@index');
    Route::get('/station', 'AdminController@viewstation');
    Route::post('/station/createStation', 'AdminController@createStation');
    Route::get('/train', 'AdminController@viewtrain');
    Route::get('/trainrute', 'AdminController@trainrute');
    Route::post('/train/createTrain', 'AdminController@createTrain');
    Route::get('/train/editrute/{id_train}', 'AdminController@editrute');
    Route::put('/train/update', 'AdminController@UpdateTrain');
    Route::delete('/trainrute/deleterute/{id_train}', 'AdminController@deleterute');



});
