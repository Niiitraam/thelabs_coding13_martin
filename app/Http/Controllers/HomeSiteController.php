<?php

namespace App\Http\Controllers;

use App\Models\HomeSite;
use Illuminate\Http\Request;
use App\Models\Titre;
use App\Models\HomeS1;
use App\Models\Video;
use App\Models\Temoignage;
use App\Models\Service;
use App\Models\User;
use App\Models\Team;
use App\Models\Button;
use App\Models\Contact;

class HomeSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titre = Titre::all();
        $presentation = HomeS1::all();
        $video = Video::all();
        $temoignage = Temoignage::all();
        $servicesAll = Service::all();
        $service = Service::all()->random(3);
        $user = User::all();
        $team = Team::all();
        $button = Button::all();
        $contact = Contact::all();
        return view('home-site', compact('titre', 'presentation', 'video', 'temoignage', 'servicesAll', 'user', 'team', 'button', 'contact', 'service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $text = HomeS1::all();
        $video = Video::all();
        $temoignage = Temoignage::all();
        return view('home-show', compact('text', 'video', 'temoignage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeSite  $homeSite
     * @return \Illuminate\Http\Response
     */
    public function show($homeSite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeSite  $homeSite
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeSite $homeSite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeSite  $homeSite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSite $homeSite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeSite  $homeSite
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeSite $homeSite)
    {
        //
    }
}
