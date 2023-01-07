<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDailyLogRequest;
use App\Http\Requests\UpdateDailyLogRequest;
use App\Models\DailyLog;

class DailyLogController extends Controller
{
    public function index()
    {
        return view('daily-logs.index', [
            'dailyLogs' => DailyLog::query()
                ->where('user_id', auth()->id())
                ->orderBy('log_date', 'desc')
                ->paginate(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StoreDailyLogRequest $request)
    {
        //
    }


    public function show(DailyLog $dailyLog)
    {
        //
    }

    public function destroy(DailyLog $dailyLog)
    {
        //
    }
}
