<?php

namespace App\Http\Controllers;

use App\Models\Salarie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalarieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AfficherSalarie()
    {
        $salarie = Salarie::all();
        return view('DKM.salarie',['salaries' => $salarie]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function consulterDetails(Salarie $salarie  )
    {
         return view('DKM.consulterDetails',[ 'voitures'=> $salarie->voiture,'salaries' => $salarie ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Salarie $salarie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salarie $salarie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salarie $salarie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salarie $salarie)
    {
        //
    }
}
