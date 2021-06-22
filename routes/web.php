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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/details', 'DetailController@index')->name('details');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@success')->name('succcess');
Route::get('/register/success', 'Auth\RegisterController@success')->name('register.success');

Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
Route::get('/transactions', 'Dashboard\TransactionController@index')->name('transactions.index');
Route::get('/transactions/{id}/details', 'Dashboard\TransactionController@show')->name('transactions.show');
Route::get('/settings', 'Dashboard\SettingController@store')->name('settings');
Route::get('/account', 'Dashboard\SettingController@account')->name('account');
Route::resource('/products', 'Dashboard\ProductController');

Route::namespace('Admin')->prefix('admin')->group(function () {
  Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
  Route::resource('category', 'CategoryController');
  Route::resource('user', 'UserController');
  Route::resource('product', 'ProductController');
});
