<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('team', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Team;

        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->fonction = $request->fonction;
        $store->photo = $request->file('photo')->hashName();
        $store->save();

        $request->file('photo')->storePublicly('images', 'public');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($team)
    {
        $edit = Team::find($team);
        return view('team-edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $team)
    {
        $update = Team::find($team);

        $update->nom = $request->nom;
        $update->prenom = $request->prenom;
        $update->fonction = $request->fonction;
        $update->photo = $request->file('photo')->hashName();
        $update->save();

        $request->file('photo')->storePublicly('images', 'public');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($team)
    {
        $destroy = Team::find($team);

        $destroy->delete();
        return redirect()->back();
    }
}
