<?php

use Illuminate\Support\Facades\Route;

// Отслеживание URL  адрессов

Route::get('/', function () {
    return view('body');
});

Route::get('/aboutus', function () {
    return view(view: 'aboutus');
});

Route::get('/basket', function () {
    return view(view: 'basket');
});

Route::get('/catalog', function () {
    return view(view: 'catalog');
});

Route::get('/contacts', function () {
    return view(view: 'contacts');
});

Route::get('/paydeliver', function () {
    return view(view: 'paydeliver');
});

Route::get('/SignInUp', function () {
    return view(view: 'SignInUp');
});