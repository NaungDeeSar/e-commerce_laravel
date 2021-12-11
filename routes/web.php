<?php
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
Route::get('/', 'FrondendController@index')->name('indexpage');
Route::get('/filter/{subcategory}/', 'FrondendController@filter')->name('filter');
Route::get('/itemdetail/{id}/', 'FrondendController@itemdetail')->name('itemdetailpage');
Route::get('/cart', 'FrondendController@cart')->name('cartpage');
Route::get('/order_success', 'FrondendController@order_success')->name('order_success');

Route::get('signin', 'FrondendController@signin')->name('signinpage');
Route::get('signup', 'FrondendController@signup')->name('signuppage');
Route::middleware('role:admin')->group(function () {
    Route::get('admin', 'BrandController@dashboard')->name('admin');
    Route::resource('brands', 'BrandController');
    Route::resource('categories', 'CategoryController');
    Route::resource('subcategories', 'SubcategoryController');
    Route::resource('items', 'ItemController');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('orders','OrderController');
