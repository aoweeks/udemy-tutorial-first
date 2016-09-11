@extends('layouts.master')

@section('content')
    <a href="{{ route('home') }}"><- Back</a>
    <h1>I {{ $action }} {{$name}}!</h1>
@endsection