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

Route::get('/products', function () {
    return view('pages.products');
});
Route::get('/employees', function () {
    return view('pages.employees');
});
Route::get('/offices', function () {
    return view('pages.offices');
});
Route::get('/orders', function () {
    return view('pages.orders');
});
Route::get('/customers', function () {
    return view('pages.customers');
});