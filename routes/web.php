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
    return view('home');
});

Route::get('/machineMine', function () {
    return view('machineMine');
});

Route::get('/mesMachines', function () {
    return view('mesMachines');
});

Route::get('/confirmemachine', function () {
    return view('confirmemachine');
});

Route::get('/moyenRetrait', function () {
    return view('moyenRetrait');
});

Route::get('/moyenRetraitValid', function () {
    return view('moyenRetraitValid');
});

Route::get('/retrait', function () {
    return view('retrait');
});

Route::get('/footer', function () {
    return view('layout/footer/footer');
});





