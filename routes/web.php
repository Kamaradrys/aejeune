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

// Route::get('/', function () {
//     return view('index');
// });



	// Route::get('/dashboard', function () {
	//     return view('dashboard');
	// })->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/agences', function () { return view('agence.index'); })->name('agence.index');
    Route::get('/agences/create', function () { return view('agence.create'); })->name('agence.create');
    Route::post('/agences/store', function () { return view('agence.store'); })->name('agence.store');
    Route::get('/agences/{agence}/edit', function () { return view('agence.edit'); })->name('agence.edit');
    Route::post('/agences/{agence}/update', function () { return view('agence.update'); })->name('agence.update');
    Route::post('/agences/{agence}/delete', function () { return view('agence.delete'); })->name('agence.delete');
   



});


require __DIR__.'/auth.php';
