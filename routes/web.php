<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('/t2', function () {
    return view('t2');
});

Route::get('/ward','WardController@index');
Route::get('/create','WardController@create');
Route::get('/edit','WardController@edit');
Route::POST('/form','WardController@store');
Route::resource('ward', 'WardController');

Route::get('/reservation','ReservationController@index');
Route::get('/reservationCreate','ReservationController@create');
Route::get('/reservationEdit','ReservationController@edit');
Route::POST('/reservationForm','ReservationController@store');
Route::resource('reservation', 'ReservationController');
