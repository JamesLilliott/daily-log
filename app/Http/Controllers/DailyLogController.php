<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDailyLogRequest;
use App\Http\Requests\UpdateDailyLogRequest;
use App\Models\DailyLog;
use Illuminate\Http\Request;

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
        return view('daily-logs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'log_date' => 'required|date',
            'content' => 'required|string',
            'mood_score' => 'required|integer',
            'alcohol_units' => 'required|integer',
        ]);

        $dailyLog = new DailyLog();
        $dailyLog->user_id = $validatedData['user_id'];
        $dailyLog->log_date = $validatedData['log_date'];
        $dailyLog->content = $validatedData['content'];
        $dailyLog->mood_score = $validatedData['mood_score'];
        $dailyLog->alcohol_units = $validatedData['alcohol_units'];
        $dailyLog->save();

        return redirect()->route('daily-logs.index')->with('success', 'Daily Log created successfully!');
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
