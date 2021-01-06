<?php

namespace App\Http\Controllers;

use App\Models\HomeSite;
use Illuminate\Http\Request;

class HomeSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home-site');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeSite  $homeSite
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSite $homeSite)
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
