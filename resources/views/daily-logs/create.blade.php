@extends('layouts.blog')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('daily-logs.store') }}">
        @csrf
        <div class="form-group mt-2">
            <label for="content">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" required>{{ old('content') }}</textarea>
            @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="mood_score">Mood Score</label>
            <input type="text" class="form-control @error('mood_score') is-invalid @enderror" id="mood_score" name="mood_score" value="{{ old('mood_score') }}" required>
            @error('mood_score')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="alcohol_units">Alcohol Units</label>
            <select name="alcohol_units" class="form-select" aria-label="Default select example">
                <option selected>Select...</option>
            @foreach([0, 1, 2, 3, 5, 8, 13, 21] as $value)
                    <option value="{{$value}}">{{$value}}</option>
                @endforeach
            </select>
            @error('alcohol_units')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary float-end mt-2">Create</button>
    </form>
</div>
@endsection
