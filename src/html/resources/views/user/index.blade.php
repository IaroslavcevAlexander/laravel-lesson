@extends('layouts.default')

@section('title', 'Register')

@section('content')

    <div class="container">

        @foreach($users as $user)
            <div class="mb-2">
                @if($user->avatar)
                    <img width="50px" src="{{ asset("uploads/$user->avatar") }}" alt="ava..">
                @else
                    <img width="50px" src="https://i.pinimg.com/1200x/94/05/5f/94055f0a5b69b2443c75b6f961019a8e.jpg" alt="no-avatar">
                @endif
                {{ $user->name }}
            </div>
        @endforeach
    </div>

@endsection
