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

// Route::get('/', function () {
//     return view('body');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index1'])->name('body');

Route::get('/basket', [App\Http\Controllers\BasketController::class, 'basket'])->name('basket');
Route::get('/basket/place', [App\Http\Controllers\BasketController::class, 'basketPlace'])->name('basket-place');

Route::post('/basket/add/{id}', [App\Http\Controllers\BasketController::class, 'basketAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [App\Http\Controllers\BasketController::class, 'basketRemove'])->name('basket-remove');
Route::post('/basket/place', [App\Http\Controllers\BasketController::class, 'basketConfirm'])->name('basket-confirm');

Route::get('/{cat}', [App\Http\Controllers\ProductController::class, 'showCategory'])->name('showCategory');

Route::get('/{cat}/{product_id}', [App\Http\Controllers\ProductController::class, 'show'])->name('showProduct');

