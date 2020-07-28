<?php

namespace App\Http\Controllers;

use App\Bat;
use Illuminate\Http\Request;

class BatController extends Controller
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
        return view('bat.create');
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
     * @param  \App\Bat  $bat
     * @return \Illuminate\Http\Response
     */
    public function show(Bat $bat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bat  $bat
     * @return \Illuminate\Http\Response
     */
    public function edit(Bat $bat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bat  $bat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bat $bat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bat  $bat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bat $bat)
    {
        //
    }
}
