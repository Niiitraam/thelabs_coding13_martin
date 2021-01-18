<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Titre;
use App\Models\Button;
use App\Models\Contact;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Service::all();
        $data = Service::all()->random(3);
        $titre = Titre::all();
        $button = Button::all();
        $contact = Contact::all();
        return view('services', compact('datas', 'titre', 'button', 'data', 'contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Service::all();
        return view('servicesAll', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Service;

        $store->icone = $request->icone;
        $store->titre_service = $request->titre_service;
        $store->texte_service = $request->texte_service;

        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($service)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($service)
    {
        $edit = Service::find($service);
        return view('servicesAll_edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$service)
    {
        $update = Service::find($service);

        $update->icone = $request->icone;
        $update->titre_service = $request->titre_service;
        $update->texte_service = $request->texte_service;
        $update->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($service)
    {
        $destroy = Service::find($service);
        $destroy->delete();
        return redirect()->back();
    }
}
