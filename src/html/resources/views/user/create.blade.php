@extends('layouts.default')

@section('title', 'Register')

@section('content')

    <div class="container">
        <h1>Register</h1>

        {{ $name }} - {!! $name !!}

        <p>Now: {{date("Y-m-d H:i")}}</p>


        @if (!empty($users))
            @foreach($users as $user)
                <h4>{{ $user['id'] }} - {{ $user['name'] }}</h4>
                <p>{{ $loop->index }} - {{ $loop->iteration }} - {{ $loop->count }}</p>

            @endforeach

        @else
            <p>
                no users..
            </p>

        @endif
    </div>

@endsection
