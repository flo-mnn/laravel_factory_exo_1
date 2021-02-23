<?php

namespace App\Http\Controllers;

use App\Models\FormationType;
use Illuminate\Http\Request;

class FormationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.formationtypes',["formation_types"=>FormationType::all()]);
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
     * @param  \App\Models\FormationType  $formationType
     * @return \Illuminate\Http\Response
     */
    public function show(FormationType $formationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormationType  $formationType
     * @return \Illuminate\Http\Response
     */
    public function edit(FormationType $formationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormationType  $formationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormationType $formationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormationType  $formationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormationType $formationType)
    {
        //
    }
}
