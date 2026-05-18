@extends('layouts.default')

@section('title', 'Login')


@section('content')

    <div class="container">
        <h1>Login</h1>

        {{ $users_cnt }}
    </div>

@endsection

@push('header_scripts')
    <script src="{{ asset('assets/js/test.js') }}"></script>
@endpush

@push('footer_scripts')
    <script src="{{ asset('assets/js/test.js') }}"></script>
@endpush
