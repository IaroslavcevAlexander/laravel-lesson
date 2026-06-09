@extends('layouts.default')

@section('title', 'Register')

@section('content')

    <div class="container">
       <div class="row">
           <div class="mb-3">
               <div class="col-md-6 offset-md-3">
                   <h1>Register</h1>

                   @if ($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                               @endforeach
                           </ul>
                       </div>
                   @endif

                   @if (session()->has('success'))
                       <div class="alert alert-success">
                           {{ session('success') }}
                       </div>
                   @endif

                   {{ asset('storage/images/2026/06/09/77oQ11QdWTp2a0TJ1bQzuH6GU13zwj81rxrmSpio.jpg') }}
                   <form action="{{ route('register.store') }}" method="post" enctype="multipart/form-data">
                       @csrf

                       <div class="mb-3">
                           <label for="name" class="form-label">Name</label>
                           <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                       </div>

                       <div class="mb-3">
                           <label for="email" class="form-label">Email</label>
                           <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                       </div>

                       <div class="mb-3">
                           <label for="password" class="form-label">Password</label>
                           <input type="password" class="form-control @error('name')is-invalid @enderror" id="password" name="password" placeholder="Password">
                       </div>

                       <div class="mb-3">
                           <label for="password_confirmation" class="form-label">Password Confirmation</label>
                           <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation">
                       </div>

                       <div class="mb-3">
                           <label for="avatar" class="form-label">Avatar</label>
                           <input name="avatar" type="file" class="form-control" id="avatar" placeholder="Avatar">
                       </div>

                       <div class="form-check mb-3">
                           <input name="agree" class="form-check-input" type="checkbox" id="agree">
                           <label class="form-check-label" for="agree">
                               Agree
                           </label>
                       </div>

                       <button type="submit" class="btn btn-warning">Register</button>
                   </form>
               </div>
           </div>
       </div>
    </div>

@endsection
