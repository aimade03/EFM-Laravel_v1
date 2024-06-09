<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eleve;
use App\Models\Club;
use App\Models\Activite;


class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('EFM.ELEVE.index',compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $club = Club::all();
        return view('EFM.ELEVE.create',compact('club'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $club = Club::find($request['club_id']);
        $eleve = new Eleve ;
        $eleve->nom = $request['nom'];
        $eleve->prenom = $request['prenom'];
        $club->eleves()->save($eleve);
        return redirect('eleves');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Eleve $eleve)
    {
        $eleve = Eleve::find($id);
        $club = $eleve->club;
        $activites = $eleve->activites;
        $sum = $activites->sum('nombreJour') ;
        
        return view('EFM.ELEVE.show', compact('eleve', 'club', 'activites','sum'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eleves = Eleve::find($id);
        $club = Club::all();
        return view('EFM.ELEVE.update',compact('eleves','club'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nv_club = Club::find($request['club_id']);
        $eleve = Eleve::find($id);
        $eleve->nom = $request['nom'];
        $eleve->prenom = $request['prenom'];
        if(!$nv_club->is($eleve->club)){
            $eleve->club()->associate($nv_club);
        }
        $eleve->save();
        return redirect('eleves');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eleve = Eleve::find($id);
        $club = Club::find($id);
        $activites = Activite::find($id);
        $eleve->club()->dissociate();
        $eleve->activites()->detach();
        $eleve->delete();
        return redirect('eleves');

    }

}
