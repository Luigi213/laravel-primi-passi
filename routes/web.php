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
    return view('hello_word');
})->name('home');

Route::get('/contatti', function () {
    $ciao = [
        "name" => "pippo",
        "id" => 3
    ];
    return view('contatti', $ciao);
})->name('contacts');
