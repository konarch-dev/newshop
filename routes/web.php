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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products1', function () {
    return view('products1');
});


Route::get('/checkout', function () {
    return view('checkout');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/registered', function () {
    return view('registered');
});


Route::get('/single', function () {
    return view('single');
});


Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('konarch2022@gmail.com')->send(new \App\Mail\MyTestMail($details));
   return view('welcome');
   // dd("Email is Sent.");
});