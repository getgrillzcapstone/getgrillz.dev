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

Route::get('/create-order-rent', 'OrderController@rent');

Route::get('/faq-contact', function () {
    return view('faqContact');
});

Route::get('/create-order-buy', 'OrderController@buy');

// Route::get('/confirm-order', function () {
//     return view('confirmOrder');
// });

Route::get('/your-orders', function () {
    return view('yourOrders');
});

Route::get('/thankyou', function () {
    return view('thankYou');
});

Route::get('/confirm-order', 'OrderController@getCart');

Route::get('/add-to-cart/{id}', 'OrderController@addToCart');

// Route::get('/add-extra-to-cart/{id}', 'OrderController@addToCartExtraItems');


Route::resource('items', 'ItemController');

Route::post('manufacturer', 'ItemController@manSort');


// Route::resource('checkout', 'CheckoutController');


// Route::resource('orders', 'OrderController');
//
// Route::resource('users', 'UserController');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// // Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Route::get('profile', ['middleware' => 'auth.basic', function() {
//     // Only authenticated users may enter...
// }]);
