<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', config('app.name', 'Laravel'))</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="@yield('body_class', 'bg-light')">
  <nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">
      <a class="navbar-brand fw-semibold" href="{{ auth()->check() ? route('dashboard') : route('login') }}">{{ config('app.name', 'Laravel') }}</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNavbar">
        @auth
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('dashboard') ? 'active fw-semibold' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('mahasiswa.*') ? 'active fw-semibold' : '' }}" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('kelas.*') ? 'active fw-semibold' : '' }}" href="{{ route('kelas.index') }}">Kelas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('dosen.*') ? 'active fw-semibold' : '' }}" href="{{ route('dosen.index') }}">Dosen</a>
            </li>
          </ul>

          <div class="ms-auto d-flex align-items-center gap-3">
            <span class="text-secondary small">Hi, {{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" class="m-0">
              @csrf
              <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
            </form>
          </div>
        @else
          <div class="ms-auto">
            <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">Login</a>
          </div>
        @endauth
      </div>
    </div>
  </nav>

  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
