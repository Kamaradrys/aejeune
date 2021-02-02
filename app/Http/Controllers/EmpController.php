<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visiteur;
use App\Models\User;
use PDF;
use Auth;

class EmpController extends Controller
{
    public function getAllVisiteurs()
    {
        //
    	$visiteurs = Visiteur::all();
        $user = Auth::user()->name;
    	return view('visiteur.show',compact('visiteurs','user'));
    }

      //code de downloadPDF en laravel
    public function downloadPDF()
    {
    	$visiteurs = Visiteur::all();
        $user = Auth::user()->name;
    	$pdf = PDF::loadView('visiteur.show', compact('visiteurs','user'));
    	return $pdf->download('visiteur.pdf');
    }
}