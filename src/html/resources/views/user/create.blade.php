@extends('layouts.default')

@section('title', 'Register')

@section('content')

    <div class="container">
       <div class="row">
           <div class="mb-3">
               <div class="col-md-6 offset-md-3">
                   <h1>Register</h1>

                   <form action="{{ route('register.store') }}" method="post">
                       @csrf

                       <div class="mb-3">
                           <label for="name" class="form-label">Name</label>
                           <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                       </div>

                       <div class="mb-3">
                           <label for="email" class="form-label">Email</label>
                           <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                       </div>

                       <div class="mb-3">
                           <label for="password" class="form-label">Password</label>
                           <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                       </div>

                       <div class="mb-3">
                           <label for="password_confirmation" class="form-label">Password Confirmation</label>
                           <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation">
                       </div>

                       <div class="form-check mb-3">
                           <input name="agree" class="form-check-input" type="checkbox" id="agree">
                           <label class="form-check-label" for="agree">
                               Agree
                           </label>
                       </div>

                       <button type="submit" class="btn btn-warning">Register</button>

                       @php
                           dump(request()->old())
                       @endphp
                   </form>
               </div>
           </div>
       </div>
    </div>

@endsection
