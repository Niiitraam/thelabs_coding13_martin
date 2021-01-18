<?php

namespace App\Http\Controllers;

use App\Models\Temoignage;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Temoignage::all();
        return view('temoignage', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temoignage = new Temoignage;

        $temoignage->nom = $request->nom;
        $temoignage->prenom = $request->prenom;
        $temoignage->temoignage = $request->temoignage;
        $temoignage->fonction = $request->fonction;
        $temoignage->photo = $request->file('photo')->hashName();
        $temoignage->save();
        $request->file('photo')->storePublicly('img', 'public');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function show(Temoignage $temoignage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function edit($temoignage)
    {
        $edit = Temoignage::find($temoignage);
        return view('temoignage-edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $temoignage)
    {
        $update = Temoignage::find($temoignage);
        
        $update->nom = $request->nom;
        $update->prenom = $request->prenom;
        $update->temoignage = $request->temoignage;
        $update->fonction = $request->fonction;
        $update->photo = $request->file('photo')->hashName();
        $update->save();

        $request->file('photo')->storePublicly('images', 'public');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function destroy($temoignage)
    {
        $destroy = Temoignage::find($temoignage);
        $destroy->delete();
        return redirect()->back();
    }
}
