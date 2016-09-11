@extends('layouts.master')

@section('content')
    <div class="centered">
        <a href="{{ route('niceaction', ['action' => 'greet']) }}">Greet</a>
        <a href="{{ route('niceaction', ['action' => 'hug']) }}">Hug</a>
        <a href="{{ route('niceaction', ['action' => 'kiss']) }}">Kiss</a>
        <br>
        <br>
        <form action="{{ route('benice') }}" method="POST">
            {{ csrf_field() }}
            <label for="select-action">I want to...</label>
            <select id="select-action" name="action">
                <option value="greet">Greet</option>
                <option value="hug">Hug</option>
                <option value="kiss">Kiss</option>
            </select>
            <input type="text" name="name"/>
            <button type="submit">Do a nice action!</button>
        </form>
    </div>
@endsection