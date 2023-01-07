@extends('layouts.blog')

@section('content')
<?php /** @var \App\Models\DailyLog $dailyLog */ ?>

<div class="container-sm">
    <div class="row">
        @forelse($dailyLogs as $dailyLog)
            <div class="col-sm-12 col-md-6 col-xl-4 mt-3">
                <div class="card">
                    <div class="card-header">{{ \Carbon\Carbon::createFromDate($dailyLog->log_date)->format('D jS M') }}</div>
                    <div class="card-body">
                        <p>Alcohol: {{ $dailyLog->alcohol_units }}</p>
                        <p>Mood: {{ $dailyLog->mood_score }}</p>
                        <p>Content: {{ $dailyLog->content }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>No Daily Log Yet...</p>
        @endforelse
    </div>


</div>

@endsection

