<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AfficherListVoiture()
    {
        $voiture = Voiture::all();
        return view('DKM.index',['voitures' => $voiture]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DKM.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function AjouterVoiture(Request $request)
    {
        $voiture = new Voiture ;
        $voiture->marque = $request['marque'];
        $voiture->modele = $request['modele'];
        $voiture->dateMiseEnCirculation = $request['dateMiseEnCirculation'];
        $voiture->save();
        return redirect('/voitures');

    }

    /**
     * Display the specified resource.
     */
    public function show(Voiture $voiture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voiture $voiture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voiture $voiture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function SupprimerVoiture(Voiture $voiture)
    {
        $voiture->service()->detach();
        $voiture->delete();
        return redirect('/voitures');
    }
}
