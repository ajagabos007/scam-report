<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssetableRequest;
use App\Http\Requests\UpdateAssetableRequest;
use App\Models\Assetable;

class AssetableController extends Controller
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
     * @param  \App\Http\Requests\StoreAssetableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assetable  $assetable
     * @return \Illuminate\Http\Response
     */
    public function show(Assetable $assetable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assetable  $assetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Assetable $assetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetableRequest  $request
     * @param  \App\Models\Assetable  $assetable
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetableRequest $request, Assetable $assetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assetable  $assetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assetable $assetable)
    {
        //
    }
}
