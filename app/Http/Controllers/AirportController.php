<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airports = Airport::all();

        return view("airports.index", compact("airports"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("airports.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Airport::create($request->all());

        return redirect()->route("airports.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Airport $airport)
    {
        return view("airports.show", compact("airport"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airport $airport)
    {
        return view("airports.edit", compact("airport"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Airport $airport)
    {
        $airport->update($request->all());
        return redirect()->route("airports.show",['airport'=> $airport->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airport $airport)
    {
        //
    }
}
