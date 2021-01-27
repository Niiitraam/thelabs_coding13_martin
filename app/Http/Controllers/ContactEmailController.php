<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titre;
use App\Models\Map;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\ContactEmail;
use App\Models\Email;

class ContactEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titre = Titre::all();
        $contact = Contact::all();
        $map = Map::all();
        return view('contact', compact('titre', 'contact', 'map'));
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
        $store = new Email;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->subject = $request->subject;
        $store->message = $request->message;
        $store->save();
        Mail::to('martinmdvld@gmail.com')->send(new ContactEmail($request));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactEmail  $contactEmail
     * @return \Illuminate\Http\Response
     */
    public function show(ContactEmail $contactEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactEmail  $contactEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactEmail $contactEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactEmail  $contactEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactEmail $contactEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactEmail  $contactEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactEmail $contactEmail)
    {
        //
    }
}
