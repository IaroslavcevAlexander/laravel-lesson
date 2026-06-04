@extends('layouts.default')

@section('title', $title)

@section('content')

    <div class="container">
        <h1>{{ $title }}</h1>

        @foreach($posts as $post)
            <H3>
                {{ $post->title }}
            </H3>

            @foreach($post->comments as $comment)
                <div>{{$comment->content}}</div>
            @endforeach
        @endforeach
    </div>

@endsection
