<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa - {{ config('app.name', 'Laravel') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
  <main class="container py-4 py-md-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h1 class="h4 mb-0">Detail Mahasiswa</h1>
              <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary btn-sm">Kembali</a>
            </div>

            <dl class="row mb-0">
              <dt class="col-sm-3">NIM</dt>
              <dd class="col-sm-9">{{ $mahasiswa->nim }}</dd>

              <dt class="col-sm-3">Nama</dt>
              <dd class="col-sm-9">{{ $mahasiswa->nama }}</dd>

              <dt class="col-sm-3">Jurusan</dt>
              <dd class="col-sm-9">{{ $mahasiswa->jurusan }}</dd>

              <dt class="col-sm-3">Angkatan</dt>
              <dd class="col-sm-9">{{ $mahasiswa->angkatan }}</dd>

              <dt class="col-sm-3">Email</dt>
              <dd class="col-sm-9">{{ $mahasiswa->email }}</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
