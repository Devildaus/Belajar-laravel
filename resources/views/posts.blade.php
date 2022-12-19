@extends('layouts.main')

@section('container')

<h1 align=center>{{ $title }}</h1></br>

@foreach ($posts as $post)
    <Style>a{text-decoration:none}</Style>
    <article class mb-5 >
        <a href="/posts/{{ $post->slug }}">
            <h2>{{ $post->title }}</h2>
        </a> 
        <p>By.<a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug ?? 'unknown' }}" class="text-decoration-none">  {{ $post->category->name  ?? 'unknown' }}</a></p> 

        {{ $post->excerpt }}
        <a href="/posts/{{ $post->slug }}">
            ..... <p>Selengkapnya</p>
        </a></br></br> 
    </article>   
@endforeach

@endsection