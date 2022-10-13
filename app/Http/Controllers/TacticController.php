<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTacticRequest;
use App\Http\Requests\UpdateTacticRequest;
use App\Models\Tactic;

class TacticController extends Controller
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
     * @param  \App\Http\Requests\StoreTacticRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTacticRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tactic  $tactic
     * @return \Illuminate\Http\Response
     */
    public function show(Tactic $tactic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tactic  $tactic
     * @return \Illuminate\Http\Response
     */
    public function edit(Tactic $tactic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTacticRequest  $request
     * @param  \App\Models\Tactic  $tactic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTacticRequest $request, Tactic $tactic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tactic  $tactic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tactic $tactic)
    {
        //
    }
}
