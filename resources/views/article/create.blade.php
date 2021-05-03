@extends('layouts.app')

@section('content')
    <h1> bikin artikel baru</h1>

    <form action="/artikel" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="subject">subject</label>
            <textarea class="form-control" id="subject" name="subject" rows="3" >{{ old('subject') }}</textarea>
            @error('subject')
                <div class="alert alert-danger"> {{ $message }} </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">submit</button>

    </form>

@endsection
