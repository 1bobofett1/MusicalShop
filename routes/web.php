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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::group([
    'middleware' => 'auth',
    // 'namespace' => 'Admin',
    'prefix' =>'admin',
], function(){
    Route::group(['middleware' => 'is_admin'], function(){
        Route::get('/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('home');
    });

    Route::resource('categories', '\App\Http\Controllers\Admin\CategoryController');
    Route::resource('products', '\App\Http\Controllers\Admin\ProductController');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index1'])->name('body');

Route::group(['prefix' => 'basket',],function(){
    Route::post('/add/{id}', [App\Http\Controllers\BasketController::class, 'basketAdd'])->name('basket-add');

    Route::group([
        'middleware' => 'basket_not_empty',
    ], function() {
        Route::get('/', [App\Http\Controllers\BasketController::class, 'basket'])->name('basket');
        Route::get('/place', [App\Http\Controllers\BasketController::class, 'basketPlace'])->name('basket-place');
        Route::post('/remove/{id}', [App\Http\Controllers\BasketController::class, 'basketRemove'])->name('basket-remove');
        Route::post('/place', [App\Http\Controllers\BasketController::class, 'basketConfirm'])->name('basket-confirm');
    });
});

Route::get('/{cat}', [App\Http\Controllers\ProductController::class, 'showCategory'])->name('showCategory');

Route::get('/{cat}/{product_id}', [App\Http\Controllers\ProductController::class, 'show'])->name('showProduct');



