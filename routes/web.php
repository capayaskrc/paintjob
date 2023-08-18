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
    return view('paint_jobs');
});


Route::get('/auto_paint', function () {
    return view('auto_paint');
})->name('auto_paint');

Route::get('/paint_jobs', function () {
    return view('paint_jobs');
})->name('paint_jobs');
