@extends('layouts.app')

@section('title', 'Dashboard - ' . config('app.name', 'Laravel'))

@section('content')
  <main class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <div class="card shadow-sm border-0">
          <div class="card-body p-4 p-md-5">
            <h1 class="h3 mb-3">Dashboard</h1>
            <p class="text-secondary mb-4">Selamat datang, {{ auth()->user()->name }}. Kamu berhasil login.</p>
            <div class="alert alert-success mb-0" role="alert">
              Login sukses menggunakan akun <strong>{{ auth()->user()->email }}</strong>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
