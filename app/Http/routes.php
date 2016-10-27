<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/create-order', function () {
    return view('createOrder');
});

Route::get('/items', function () {
    return view('items');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/confirm-order', function () {
    return view('confirmOrder');
});
