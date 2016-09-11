@extends('layouts.master')

@section('content')
    <div class="centered">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, unde velit labore minus ut at aut odit consequuntur deserunt incidunt omnis nostrum mollitia autem quaerat corporis impedit distinctio cumque dolores!
        </p>
        <ul>
            @for($i = 0; $i < 7; $i++)
                @if($i % 2 === 0)
                    <li>Iteration {{ $i + 1 }}</li>
                @endif
            @endfor
        </ul>
    </div>
@endsection