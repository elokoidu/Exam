<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
Route::get('product', 'PagesController@getProduct');
Route::get('detail', 'PagesController@getDetail');
Route::get('home', 'PagesController@getIndex');
Route::get('/', 'PagesController@getIndex');
Route::resource('products', 'ProductController');
Route::get('products/{slug}', ['as' => 'product.detail', 'uses' => 'ItemController@getDetail']);

Auth::routes();
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('auth/register', 'Auth\RegisterController@getRegister');
Route::post('auth/register', 'Auth\RegisterController@postRegister');


