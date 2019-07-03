<?php

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

// General routes

Route::get('/', function () {
    return view('welcome');
});

// End of general routes

// Ponokawan routes

Route::prefix('ponokawan')->group( function() {
    Route::get('/', function() {
        return view('ponokawan.home');
    });
    Route::get('/semar', function() {
        return view('ponokawan.semar');
    });
    Route::get('/petruk', function() {
        return view('ponokawan.petruk');
    });
    Route::get('/gareng', function() {
        return view('ponokawan.gareng');
    });
    Route::get('/bagong', function() {
        return view('ponokawan.bagong');
    });
});

// End of ponokawan routes