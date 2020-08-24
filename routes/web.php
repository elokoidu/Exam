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

Route::group(['middlware' => ['web']], function () {
  Auth::routes();
  Route::get('auth/login', 'Auth\AuthController@getLogin');
  Route::post('auth/login', 'Auth\AuthController@postLogin');
  Route::get('/logout', 'Auth\LoginController@logout');
  Route::get('auth/register', 'Auth\RegisterController@getRegister');
  Route::post('auth/register', 'Auth\RegisterController@postRegister');

  Route::get('home', 'PagesController@getIndex');
  Route::get('detail', 'PagesController@getDetail');
  Route::get('product', 'PagesController@getProduct');

  Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::resource('products', 'ProductController');
  });
});

Route::get('/', 'PagesController@getIndex');
