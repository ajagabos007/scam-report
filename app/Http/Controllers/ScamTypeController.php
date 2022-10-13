<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScamTypeRequest;
use App\Http\Requests\UpdateScamTypeRequest;
use App\Models\ScamType;

class ScamTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreScamTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScamTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScamType  $scamType
     * @return \Illuminate\Http\Response
     */
    public function show(ScamType $scamType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScamType  $scamType
     * @return \Illuminate\Http\Response
     */
    public function edit(ScamType $scamType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScamTypeRequest  $request
     * @param  \App\Models\ScamType  $scamType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScamTypeRequest $request, ScamType $scamType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScamType  $scamType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScamType $scamType)
    {
        //
    }
}
