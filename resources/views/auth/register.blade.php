@extends('layouts.app')

@section('content')
  <div class="container text center w-25">
    <div class="card">
        <div class="card-header text-center">
          Register
        </div>
        <div class="card-body">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" value="{{old('name')}}">
                </div>
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="{{old('username')}}">
                </div>
                @error('username')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Name" aria-describedby="basic-addon1" value="{{old('email')}}">
                </div>
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" aria-label="Confirm-Password" aria-describedby="basic-addon1">
                </div>
                @error('password_confirmation')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
            </form>
        </div>
      </div>
  </div>
@endsection
