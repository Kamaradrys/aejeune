<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\VisiteursRequest;
use App\Models\Sexe;
use App\Models\Objet;
use App\Models\Agence;
use App\Models\Visiteur;


class VisiteursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $visiteurs = Visiteur::all();
     
        return view('visiteur.index', ['visiteurs' => $visiteurs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $optionsSexes = Sexe::pluck('name','id');
        $optionsObjets = Objet::pluck('name','id');
        $optionsAgences = Agence::pluck('name','id');
        return view('visiteur.create', compact('optionsObjets','optionsSexes','optionsAgences') );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisiteursRequest $request)
    {

      $data = $request->all();
      Visiteur::create($data);
      return redirect()->back();

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Visiteur.show', ['visiteur' => Visiteur::findOrFail($id)]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objets=Objet::all();
        $sexes=Sexe::all();
        $agences=Agence::all();
        $visiteur = Visiteur::findOrFail($id);
        return view('visiteur.edit', compact('visiteur','sexes','objets','agences'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $visit = Visiteur::findOrFail($id);
        $visit->update([
            'nom'=>$request->nom,
            'prenoms'=>$request->prenoms,
            'sexe_id'=>$request->sexe_id,
            'structure'=>$request->structure,
            'contacts'=>$request->contacts,
            'mail'=>$request->mail,
            'objet_id'=>$request->objet_id,
            'agence_id'=>$request->agence_id,
        ]);

        return redirect()->back();
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visiteur::where('id',$id)->delete(); return redirect()->back();
    }
}

