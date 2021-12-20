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
     $comics = config('data')['comics'];
    return view('welcome', compact('comics'));
})->name('welcome');


Route::get('comic/{id}', function ($id) {
    $comics = config('data')['comics'];
    $comic = $comics[$id];
    return view('comic', compact('comic'));
})->name('comic');