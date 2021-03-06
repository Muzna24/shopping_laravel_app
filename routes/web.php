<?php

use App\Http\Controllers\orderController;
use App\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('add-product','admin.addproduct');
Route::post('add-product/add','ProductController@add');
Route::get('product/show','ProductController@show');

Route::get('product/delete/{id}','ProductController@delete');
Route::get('edit/{id}','ProductController@edit');
Route::put('edit/{id}', 'ProductController@update');

Route::get('order/show','orderController@show');
Route::get('order-edit/{id}','orderController@edit');
Route::put('order-edit/{id}', 'orderController@update');
Route::get('product/list', 'orderController@showProduct');

Route::get('/request/{id}', 'orderController@addRequest');
Route::put('/request/{id}', 'orderController@addOrder');
Route::get('order/list','orderController@showorder');

Route::get('/search', 'productController@search');

Route::get('order','orderController@export');
Route::view('import-file', 'admin.export_import');
Route::post('issue/import', 'orderController@import');







