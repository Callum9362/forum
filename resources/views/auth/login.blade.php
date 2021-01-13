@extends('layouts.app')

@section('content')
  <div class="container text center w-50">
    <div class="card">
        <div class="card-header text-center">
          Login
        </div>
        <div class="card-body">
            @if(session('status'))
              <div class="alert alert-danger" role="alert">
                {{ session('status') }}
               </div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
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
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember"> Remember Me </label>
                  </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
      </div>
  </div>
@endsection
