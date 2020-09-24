<?php

namespace App\Http\Controllers;

use App\Models\Hidangan;
use Illuminate\Http\Request;

class HidanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hidangans = Hidangan::latest()->paginate(15);
        return view("hidangan.index", compact("hidangans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("hidangan.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hidangan::populateFromRequest($request)->save();
        return redirect("/mempelai/hidangan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hidangan  $hidangan
     * @return \Illuminate\Http\Response
     */
    public function show(Hidangan $hidangan)
    {
        return view("hidangan.show", compact("hidangan"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hidangan  $hidangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Hidangan $hidangan)
    {
        return view("hidangan.edit", compact("hidangan"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hidangan  $hidangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hidangan $hidangan)
    {
        Hidangan::populateFromRequestWithObject($request, $hidangan)->save();
        return redirect("/mempelai/hidangan/" . $hidangan->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hidangan  $hidangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hidangan $hidangan)
    {
        $hidangan->delete();
        return redirect("/mempelai/hidangan");
    }
}
