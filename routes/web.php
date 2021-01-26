<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommunesController;
use App\Http\Controllers\AgencesController;
use App\Http\Controllers\VisiteursController;
use App\Http\Controllers\UtilisateursController;
use App\Http\Controllers\UsersController;
use App\Models\Commune;
use App\Models\Agence;
use App\Models\Visiteur;
/*use App\Models\User;*/


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
    return view('auth/login');
});




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


    Route::resource('users', UsersController::class);

    //Route pour la déconnexion de l'utilisateur 
    
    Route::get('logout',function(Request $request) {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Auth::logoutOtherDevices($request);

        return redirect('/');})->name('user.logout');

    });


require __DIR__.'/auth.php';
