<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunesController;
use App\Http\Controllers\AgencesController;
use App\Http\Controllers\VisiteursController;
use App\Http\Controllers\UtilisateursController;
use App\Models\Commune;
use App\Models\Agence;
use App\Models\Visiteur;
use App\Models\Utilisateur;


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
     
    Route::resource('commune', CommunesController::class);
    Route::get('/commune/{id}/destroy', function ($id) { Commune::where('id',$id)->delete();return redirect()->back(); })->name('commune.delete');
   

    Route::resource('agence', AgencesController::class);
    Route::get('/agence/{id}/destroy', function ($id) { Agence::where('id',$id)->delete();return redirect()->back(); })->name('agence.delete');

    Route::resource('visiteur', VisiteursController::class);
    Route::get('/visiteur/{id}/destroy',function($id) { Visiteur::where('id',$id)->delete();return redirect()->back();})->name('visiteur.delete');

});


require __DIR__.'/auth.php';
