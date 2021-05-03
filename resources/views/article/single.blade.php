@extends('layouts.app')

@section('title')
    {{ $article->title }}
@endsection


@section('content')
    <div class="container">
        <h1> {{ $article->title }} </h1>
        <p> {{ $article->subject }} </p>

        <div class="">
            <a href="/artikel/{{ $article->id }}/edit" class="btn btn-info btn-sm">edit</a>
            <form action="/artikel/{{ $article->id }}"  method="post" class="">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm ">hapus</button>
            </form>
        </div>
        <a href="/artikel" class="btn btn-info btn-sm"> << </a>
    </div>
@endsection


