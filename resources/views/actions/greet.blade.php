@extends('layouts.master')

@section('content')
    <a href="{{ route('home') }}"><- Back</a>
    <h1>I greet {{$name}}!</h1>
@endsection