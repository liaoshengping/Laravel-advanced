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
    return view('welcome');
});

Route::get('fruit',[\App\Http\Controllers\Fruit::class,'get']);
Route::get('nut',[\App\Http\Controllers\Nut::class,'get']);


/**
 * 宏的运用
 */
Route::get('eat',[\App\Http\Controllers\Eat::class,'eat']);
