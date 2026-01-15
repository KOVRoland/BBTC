<?php

namespace App\Http\Controllers;

use App\Models\Befiz;
use Illuminate\Http\Request;

class BefizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Befiz::with('ugyfel')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        return Befiz::create($req->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Befiz::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Befiz $befiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Befiz $befiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return Befiz::destroy($id);
    }

        public function tagBefizetesek($azon)
    {
        return Befiz::where('ugyfel_azon', $azon)->get();
    }
}
