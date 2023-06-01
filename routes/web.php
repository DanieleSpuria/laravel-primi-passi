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
    $name = 'Gertrude';
    $lastname = 'Pensante';
    return view('home', compact('name', 'lastname'));
})->name('home');

Route::get('/user', function () {
    $name = 'Gertrude';
    $lastname = 'Pensante';
    return view('user', compact('name', 'lastname'));
})->name('user');
