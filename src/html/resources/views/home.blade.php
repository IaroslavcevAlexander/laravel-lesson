@extends('layouts.default')

@section('title', 'Home')

@section('content')

    <div class="container">
        <h1>Home</h1>

        @foreach($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    {{ $post->title }}
                </div>

                <div class="card-body">
                    {!! $post->content !!}
                </div>

                <div class="card-footer">
                    @forelse($post->categories as $category)
                        {{ $category->title }}@if(!$loop->last),@endif
                    @empty
                        - - - -
                    @endforelse
                </div>
            </div>
        @endforeach

    </div>

@endsection
