@extends('layouts.master')
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
@section('content')
    <div class="centered">
        @foreach ($actions as $action)
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
            <input type="text" name="name" id="name"/>
            
            <label for="niceness">Niceness:</label>
            <input type="text" name="niceness" id="niceness"/>
            <button type="submit" onClick="send(event)">Do a nice action!</button>
        </form>
        <br>
        <br>
        <br>
        <ul>
            @foreach ($logged_actions->all() as $logged_action)
                <li>{{ $logged_action->nice_action->name }}: {{ $logged_action->created_at }}
                    @foreach ($logged_action->nice_action->categories as $category)
                        {{ $category->name }}
                    @endforeach
                </li>
            @endforeach
        </ul>
        @if($logged_actions->lastPage() > 1)
            @for($i = 1; $i <= $logged_actions->lastPage(); $i++)
                <a href="{{ $logged_actions->url($i) }}">{{ $i }}</a>
            @endfor
        @endif
        
        <script type="text/javascript" src="">
            function send(event) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('add_action') }}",
                    data: {name: $('#name').val(), niceness: $('#niceness').val(), _token: {{ Session::token() }}}
                });
            }
        </script>
    </div>
@endsection