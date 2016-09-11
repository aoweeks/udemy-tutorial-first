@extends('layouts.master')

@section('content')
    <div class="centered">
        @foreach ($actions->all() as $action)
            <a href="{{ route('niceaction', ['action' => strtolower($action->name)]) }}">{{ $action->name }}</a>
        @endforeach
        <br>
        <br>
        @if(count($errors) > 0)
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('add_action') }}" method="POST">
            {{ csrf_field() }}
            <label for="name">Name:</label>
            <input type="text" name="name"/>
            
            <label for="niceness">Niceness:</label>
            <input type="text" name="niceness"/>
            <button type="submit">Do a nice action!</button>
        </form>
        <br>
        <br>
        <br>
        <ul>
            @foreach ($logged_actions->all() as $logged_action)
                <li>{{ $logged_action->nice_action->name }}: {{ $logged_action->created_at }}</li>
            @endforeach
        </ul>
    </div>
@endsection