<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaneController extends Controller
{
    public function index()
    {
        return view('planes.index');
    }

    public function create()
    {
        return view('planes.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('planes.index');
    }

    public function show($id)
    {
        return view('planes.show');
    }

    public function edit($id)
    {
        return view('planes.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('planes.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        return redirect()->route('planes.index');
    }
}
