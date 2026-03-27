@extends('layouts.app')

@section('title', 'Login - ' . config('app.name', 'Laravel'))

@section('content')
  <div class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4">
      <div class="card shadow-sm border-0">
        <div class="card-body p-4 p-md-5">
          <h1 class="h4 text-center mb-4">Login</h1>

          @if (session('error'))
            <div class="alert alert-danger" role="alert">
              {{ session('error') }}
            </div>
          @endif

          <form method="POST" action="{{ route('login.process') }}">
            @csrf

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="mb-4">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Masuk</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
