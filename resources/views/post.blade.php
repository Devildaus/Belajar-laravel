@extends('layouts.main')

@section('container')
<article class mb-5>
    <h2>{{ $post["title"] }}</h2>
    <h5>By : {{ $post["author"] }}</h5>
    <p>{{ $post["isi"] }}</p>
</article>   
<a href="/blog">Back To Post</a>
@endsection