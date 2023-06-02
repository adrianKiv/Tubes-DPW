<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('shop.php', function () {
    return view('shop');
});

Route::get('contact.php', function () {
    return view('contact');
});

Route::get('product.php', function () {
    return view('product-details');
});

// Route::get('/', function () {
//     return view('welcome');
// });