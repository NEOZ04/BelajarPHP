@extends('template')

@section('title', 'Home')

@section('content')
<h1>Home</h1>
<ul>
    @foreach ($navs as $nav)
    <li><a href="{{ url('/'.$nav) }}">{{ $nav }}</a></li>
    @endforeach
</ul>
@endsection