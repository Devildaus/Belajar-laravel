@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
    <article class mb-5>
        <a href="/posts/{{ $post->slug }}">
            <h2>{{ $post->title }}</h2>
        </a> 

        {{ $post->excerpt }}
        <a href="/posts/{{ $post->slug }}">
            ..... <h5>Selengkapnya</h5>
        </a></br></br> 
    </article>   
@endforeach

@endsection