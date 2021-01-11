<?php

namespace App\Http\Controllers;

use App\Models\HomeS1;
use Illuminate\Http\Request;

class HomeS1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\HomeS1  $homeS1
     * @return \Illuminate\Http\Response
     */
    public function show(HomeS1 $homeS1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeS1  $homeS1
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeS1 $homeS1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeS1  $homeS1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $homeS1)
    {
        $update = HomeS1::find($homeS1);
        $update->text1 = $request->text1;
        $update->text2 = $request->text2;
        $update->btntext = $request->btntext;
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeS1  $homeS1
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeS1 $homeS1)
    {
        //
    }
}
