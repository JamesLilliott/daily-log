@extends('layouts.blog')

@section('content')
<form method="POST" action="{{ route('daily-logs.store') }}">
    @csrf
    <div class="form-group">
        <label for="user_id">User ID</label>
        <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" value="{{ old('user_id') }}" required>
        @error('user_id')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="log_date">Log Date</label>
        <input type="date" class="form-control @error('log_date') is-invalid @enderror" id="log_date" name="log_date" value="{{ old('log_date') }}" required>
        @error('log_date')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" required>{{ old('content') }}</textarea>
        @error('content')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="mood_score">Mood Score</label>
        <input type="text" class="form-control @error('mood_score') is-invalid @enderror" id="mood_score" name="mood_score" value="{{ old('mood_score') }}" required>
        @error('mood_score')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alcohol_units">Alcohol Units</label>
        <input type="text" class="form-control @error('alcohol_units') is-invalid @enderror" id="alcohol_units" name="alcohol_units" value="{{ old('alcohol_units') }}" required>
        @error('alcohol_units')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
