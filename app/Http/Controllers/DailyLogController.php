<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDailyLogRequest;
use App\Http\Requests\UpdateDailyLogRequest;
use App\Models\DailyLog;

class DailyLogController extends Controller
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
     * @param  \App\Http\Requests\StoreDailyLogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDailyLogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DailyLog  $dailyLog
     * @return \Illuminate\Http\Response
     */
    public function show(DailyLog $dailyLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DailyLog  $dailyLog
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyLog $dailyLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDailyLogRequest  $request
     * @param  \App\Models\DailyLog  $dailyLog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDailyLogRequest $request, DailyLog $dailyLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DailyLog  $dailyLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyLog $dailyLog)
    {
        //
    }
}
