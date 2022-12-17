@extends('layouts.main')

@section('container')

<h1 align=center>Post Categories</h1></br>

@foreach ($categories as $category)
        <ul>
            <li>
            <a href="/categories/{{ $category->slug }}">
                <h2>{{ $category->name }}</h2>
            </a> 
            </li>
        </ul>
 
 
@endforeach

@endsection