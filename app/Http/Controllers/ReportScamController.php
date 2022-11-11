<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReportScamRequest;
use App\Http\Requests\UpdateReportScamRequest;
use App\Models\ReportScam;

class ReportScamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report_scams = ReportScam::orderBy('created_at', 'desc')->get();
        return view('report_scams.index', ['report_scams'=>$report_scams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report_scams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReportScamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportScamRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReportScam  $reportScam
     * @return \Illuminate\Http\Response
     */
    public function show(ReportScam $reportScam)
    {
        return view('report_scams.show', ['report_scam' => $reportScam]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportScam  $reportScam
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportScam $reportScam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReportScamRequest  $request
     * @param  \App\Models\ReportScam  $reportScam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportScamRequest $request, ReportScam $reportScam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportScam  $reportScam
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportScam $reportScam)
    {
        //
    }
}
