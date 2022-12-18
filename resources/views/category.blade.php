@extends('layouts.main')

@section('container')

<h1 align=center>Post Category : {{ $category }}</h1></br>

@foreach ($post as $post)
    <article class mb-5>
        <a href="/posts/{{ $post->slug }}">
            <h2>{{ $post->title }}</h2>
        </a>
        <p>By. Mukhamad Firdaus <a href="/categories/{{ $post->category->slug }}">  {{ $post->category->name   }}</a></p> 

        {{ $post->excerpt }}
        <a href="/posts/{{ $post->slug }}">
            ..... <h5>Selengkapnya</h5>
        </a></br></br> 
    </article>   
@endforeach

@endsection