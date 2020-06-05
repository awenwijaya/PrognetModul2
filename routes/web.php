<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains  the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/profile',function() {
	return view('welcome');
});

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home','HomeController@update_avatar');

Route::get('/admin/home',function(){
	return view('admin');
});

Route::get('/admin/login', [
	'as' => 'loginPage',
	'uses' => 'Auth\AdminLoginController@showLoginForm'
]);

Route::get('/admin/register',[
	'as' => 'registerPage',
	'uses' => 'Auth\AdminLoginController@showRegisterPage',
]);

Route::post('/admin/login/process',[
	'as' => 'loginPost',
	'uses' => 'Auth\AdminLoginController@login'
])->middleware('cekadmin');

Route::post('/admin/register/post',[
	'as' => 'registerPost',
	'uses' => 'Auth\AdminLoginController@register'
]);

Route::get('/shop',function(){
	return view('product_list');
});

Route::get('/cart', function(){
	return view('checkout');
});

Route::get('/contact', function(){
	return view('contact');
});

Route::get('/shop/man', function(){
	return view('shopman');
});

Route::get('/shop/women', function(){
	return view('shopwoman');
});

Route::get('/about', function(){
	return view('about');
});

Route::get('/admin/crud',function(){
	return view('admincrud');
})


//PRODUCT CRUD
Route::resource('products', 'AdminProductController');
Route::get('/addImage/{id}', 'AdminProductController@upload');
Route::post('/addImage/{id}', 'AdminProductController@upload_image');
Route::get('/addDiscount/{id}', 'AdminProductController@discount');
Route::post('/addDiscount/{id}', 'AdminProductController@add_discount');
Route::get('/products/delete/{id}', 'AdminProductController@delete');
Route::resource('product_images','AdminProductImageController');
Route::resource('discounts','AdminDiscountController');
Route::resource('response', 'ResponseController');

//PRODUCT CATEGORY CRUD
Route::resource('categories', 'AdminCategoryController');
Route::get('/categories/delete/{id}', 'AdminCategoryController@delete');


//PRODUCT CATEGORY DETAIL CRUD
Route::resource('product_category_details', 'AdminProductCategoryDetailController');

//COURIER
Route::resource('couriers', 'AdminCourierController');
Route::get('/couriers/delete/{id}', 'AdminCourierController@delete');
