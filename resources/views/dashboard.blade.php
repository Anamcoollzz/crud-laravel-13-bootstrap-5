<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - {{ config('app.name', 'Laravel') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">
      <a class="navbar-brand fw-semibold" href="{{ route('dashboard') }}">{{ config('app.name', 'Laravel') }}</a>
      <div class="d-flex align-items-center gap-2">
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-primary btn-sm">CRUD Mahasiswa</a>
      </div>
      <div class="ms-auto d-flex align-items-center gap-3">
        <span class="text-secondary small">Hi, {{ auth()->user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}" class="m-0">
          @csrf
          <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
        </form>
      </div>
    </div>
  </nav>

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
