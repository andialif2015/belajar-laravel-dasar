@extends('layouts.app')

@section('title', 'index')

@section('content')
    <h1>ini adalah artikel </h1>
    <a href="/artikel/create" class="btn btn-primary"> bikin artikel+ </a>

    @foreach ($articles->chunk(3) as $articleChunk)
        <div class="row">
            @foreach ($articleChunk as $article)
                <div class="col card mb-1 ml-1 mr-1">
                    <div class="card-body">
                        <p><strong>{{ ucfirst($article->title) }}</strong></p>
                        <p>{{ $article->subject }}</p>
                        <a href="/artikel/{{ $article->slug }}" class="btn btn-info btn-sm stretched-link">baca</a>
                    </div>
                </div>
            @endforeach
        </div>

    @endforeach

    <div>

        {{ $articles->links() }}

    </div>

@endsection
