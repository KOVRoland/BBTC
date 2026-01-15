<?php

namespace App\Http\Controllers;

use App\Models\Ugyfel;
use Illuminate\Http\Request;

class UgyfelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ugyfel::all();
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
        return Ugyfel::create($req->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Ugyfel::with('befizetesek')->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ugyfel $ugyfel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
       public function update(Request $req, $id)
    {
        $tag = Ugyfel::findOrFail($id);
        $tag->update($req->except('azon'));
        return $tag;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return Ugyfel::destroy($id);
    }
}
