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

// Route::get('/', function () {
//     return view('welcome');
// });

// ***************Product Routes****************

Route::match(['get','post'],'/','ProductController@addProduct');

Route::match(['get','post'],'/product/view-product','ProductController@viewProduct');


Route::match(['get','post'],'/product/edit-product/{id}','ProductController@editProduct');


Route::match(['get','post'],'/product/delete-product/{id}','ProductController@deleteProduct');

Route::match(['get','post'],'/product/view/{id}','ProductController@view');

// ***************Category Route****************

Route::match(['get','post'],'/product/add-category','CategoryController@addCategory');


