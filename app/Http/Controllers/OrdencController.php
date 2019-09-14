<?php

namespace App\Http\Controllers;

use App\Ordenc;
use Illuminate\Http\Request;

class OrdencController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ordenc.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ordenc.create');
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
     * @param  \App\Ordenc  $ordenc
     * @return \Illuminate\Http\Response
     */
    public function show(Ordenc $ordenc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ordenc  $ordenc
     * @return \Illuminate\Http\Response
     */
    public function edit(Ordenc $ordenc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ordenc  $ordenc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordenc $ordenc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ordenc  $ordenc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ordenc $ordenc)
    {
        //
    }
}
