@extends('layouts.main')

@section('container')
<Style>a{text-decoration:none}</Style>
<article class mb-5>
    <h2>{{ $post->title }}</h2>
    <p>By. <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug}}">  {{ $post->category->name   }}</a></p>

    {!! $post->body !!}
</article>   
<a href="/blog">Back To Post</a>
@endsection