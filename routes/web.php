<?php
use Illuminate\Http\Request;
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
    returnredirect('/products/');
});

Route::group(['prefix'=>'products'],function(){

	Route::get('/',function () {
    	return view('pages.products');
	});
	
	Route::put('/select',function () {
		return App\product::all()->toJson();
	});
	
	Route::post('/store',function (Request $req) {
		return "Data : ".json_encode($req->all());
	});
	
	Route::put('/show/{id}',function ($id) {
		return App\product::find($id)->toJson();
	});
	
	Route::put('/edit/{id}',function ($id) {
		return App\product::find($id)->toJson();
	});
	
	Route::post('/update/{id}',function (Request $req,$id) {
		return "Id : ".$id." Data :".json_encode($req->all());
	});
	
	Route::delete('/destroy/{id}',function ($id) {
		return "Hapus data id: ".$id;
	});

});

Route::group(['prefix'=>'employees'],function(){
	Route::get('/',function () {
    	return view('pages.employees');
	});
	
	Route::put('/select',function () {});
	
	Route::post('/store',function () {});
	
	Route::put('/show/{id}',function ($id) {});
	
	Route::put('/edit/{id}',function ($id) {});
	
	Route::post('/update/{id}',function ($id) {});
	
	Route::post('/update-password/{id}',function ($id) {});
	
	Route::delete('/destroy/{id}',function ($id) {});

});

Route::group(['prefix'=>'offices'],function(){

	Route::get('/',function () {
    	return view('pages.offices');
	});

	Route::put('/select',function () {});

	Route::post('/store',function () {});

	Route::put('/show/{id}',function ($id) {});

	Route::put('/edit/{id}',function ($id) {});

	Route::post('/update/{id}',function ($id) {});

	Route::post('/update-password/{id}',function ($id) {});

	Route::delete('/destroy/{id}',function ($id) {});

});

Route::group(['prefix'=>'orders'],function(){

	Route::get('/',function () {
    	return view('pages.orders');
	});

	Route::put('/select',function () {});

	Route::post('/store',function () {});

	Route::put('/show/{id}',function ($id) {});

	Route::put('/edit/{id}',function ($id) {});

	Route::post('/update/{id}',function ($id) {});

	Route::post('/update-password/{id}',function ($id) {});

	Route::delete('/destroy/{id}',function ($id) {});

});

Route::group(['prefix'=>'customers'],function(){

	Route::get('/',function () {
    	return view('pages.customers');
	});

	Route::put('/select',function () {});
	
	Route::post('/store',function () {});
	
	Route::put('/show/{id}',function ($id) {});
	
	Route::put('/edit/{id}',function ($id) {});
	
	Route::post('/update/{id}',function ($id) {});
	
	Route::post('/update-password/{id}',function ($id) {});
	
	Route::delete('/destroy/{id}',function ($id) {});

});
