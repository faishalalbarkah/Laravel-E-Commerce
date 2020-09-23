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

// Route::group(['middleware' => 'auth','namespace' => 'User'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/shop', 'ShopController@index');
    // Route::post('/login', 'LoginController@index');
    // Route::post('/register','LoginController@register');

//     Route::group(['middleware' => 'role:User'], function(){
//         Route::get('/', 'IndexController@index');
//     });
// });

    Route::get('/admin', 'LoginAdminController@index');
    Route::get('/get', 'LoginAdminController@login');
    Route::get('/admin/dashboard','AdminController@index');
    Route::post('/admin/dashboard', 'AdminController@Masuk');
    Route::get('/admin/addproduct','AdminController@store');
    Route::get('/admin/pesanan','AdminController@order');
   
