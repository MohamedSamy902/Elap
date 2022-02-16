<?php

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

Auth::routes();
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function() {

    Route::post('testajax/{phone}', 'App\Http\Controllers\UserController@ajaxtest');

    Route::post('insertuser', 'App\Http\Controllers\UserController@insertuser');
    // Update User With Ajax
    Route::patch('updateuser/{id}', 'App\Http\Controllers\UserController@updateuser');
    // Start Category
    Route::resource('category', 'App\Http\Controllers\CategoryController');
    Route::get('category/deletcos/{id}', 'App\Http\Controllers\CategoryController@deletcat')->name('category.delet');
    // End Category

    // Start Product
    Route::resource('product', 'App\Http\Controllers\ProductController');
    Route::get('product/{id}/receptionTest', 'App\Http\Controllers\ProductController@receptionFixes')->name('product.receptiontest');
    Route::get('product/{id}/deliveryTest', 'App\Http\Controllers\ProductController@deliveryFixed')->name('product.deliverytest');
    Route::get('product/{id}/doneFixed', 'App\Http\Controllers\ProductController@doneFixed')->name('product.donefixed');
    Route::get('product/{id}/filedfixed', 'App\Http\Controllers\ProductController@filedFixed')->name('product.filedfixed');
    Route::get('product/{id}/compleat', 'App\Http\Controllers\ProductController@compleat')->name('product.compleat');

    Route::post('search', 'App\Http\Controllers\ProductController@productSearch')->name('product.search');

    // End Product

    // Start Users
    Route::resource('user', 'App\Http\Controllers\UserController');

    Route::get('customer', 'App\Http\Controllers\UserController@customerIndex')->name('customer.index');

    Route::get('customer/{id}/edit', 'App\Http\Controllers\UserController@customerEdit')->name('customer.edit');
    Route::get('customer/create/', 'App\Http\Controllers\UserController@customerCreate')->name('customer.create');



    Route::resource('roles','App\Http\Controllers\RoleController');
    Route::resource('permissioncat','App\Http\Controllers\PermissionCatController');
});
