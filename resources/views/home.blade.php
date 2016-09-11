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
        <form action="{{ route('benice') }}" method="POST">
            {{ csrf_field() }}
            <label for="select-action">I want to...</label>
            <select id="select-action" name="action">
                
                @foreach ($actions->all() as $action)
                        <option value="{{ strtolower($action->name) }}">{{ $action->name }}</option>
                @endforeach
            </select>
            <input type="text" name="name"/>
            <button type="submit">Do a nice action!</button>
        </form>
    </div>
@endsection