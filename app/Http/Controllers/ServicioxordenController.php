<?php

namespace App\Http\Controllers;

use App\Servicioxorden;
use Illuminate\Http\Request;

class ServicioxordenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('servicioxorden.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('servicioxorden.create');
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
     * @param  \App\Servicioxorden  $servicioxorden
     * @return \Illuminate\Http\Response
     */
    public function show(Servicioxorden $servicioxorden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicioxorden  $servicioxorden
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicioxorden $servicioxorden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicioxorden  $servicioxorden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicioxorden $servicioxorden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicioxorden  $servicioxorden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicioxorden $servicioxorden)
    {
        //
    }
}
