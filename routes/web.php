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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/machineMine', function () {
    return view('machineMine');
});

Route::get('/mesMachines', function () {
    return view('mesMachines');
});

Route::get('/confirmemachine', function () {
    return view('confirmemachine');
});

Route::get('/footer', function () {
    return view('layout/footer/footer');
});





