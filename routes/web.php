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

Route::get('/tes-relation-customer-order', function () {
	//many
    $dataCustomer = App\customer::with('order')->orderBy('customerNumber')->get();
    foreach ($dataCustomer as $valueCustomer) {
        echo "customerNumber : ".$valueCustomer->customerNumber."<br>"; 
        echo "customerFirstName : ".$valueCustomer->customerFirstName."<br>";
        echo "orderDate : <br><ul>";
        foreach ($valueCustomer->order as $valueCustomerOrder){
            echo "<li>".$valueCustomerOrder->orderDate."</li>";
        }
        echo "</ul>";
    }
    echo "<hr>";
    //one
    $dataOrder = App\order::with('customer')->orderBy('customerNumber')->get();
    foreach ($dataOrder as $valueOrder) {
        echo "orderDate : ".$valueOrder->orderDate."<br>"; 
        echo "customerNumber : ".$valueOrder->customerNumber."<br>";
        echo "customerFirstName : ".$valueOrder->customer->customerFirstName."<br>";
    }   
    echo "<hr>";  
});