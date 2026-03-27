<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa - {{ config('app.name', 'Laravel') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">
      <a class="navbar-brand fw-semibold" href="{{ route('dashboard') }}">{{ config('app.name', 'Laravel') }}</a>
      <div class="ms-auto">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary btn-sm">Dashboard</a>
      </div>
    </div>
  </nav>

  <main class="container py-4 py-md-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3 mb-0">Data Mahasiswa</h1>
      <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>

    @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="card border-0 shadow-sm">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Jurusan</th>
              <th>Angkatan</th>
              <th>Email</th>
              <th class="text-end">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($mahasiswas as $mahasiswa)
              <tr>
                <td>{{ $loop->iteration + ($mahasiswas->currentPage() - 1) * $mahasiswas->perPage() }}</td>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->jurusan }}</td>
                <td>{{ $mahasiswa->angkatan }}</td>
                <td>{{ $mahasiswa->email }}</td>
                <td class="text-end">
                  <a href="{{ route('mahasiswa.show', $mahasiswa) }}" class="btn btn-sm btn-info text-white">Detail</a>
                  <a href="{{ route('mahasiswa.edit', $mahasiswa) }}" class="btn btn-sm btn-warning text-white">Edit</a>
                  <form action="{{ route('mahasiswa.destroy', $mahasiswa) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="7" class="text-center py-4 text-secondary">Belum ada data mahasiswa.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      @if ($mahasiswas->hasPages())
        <div class="card-footer bg-white">
          {{ $mahasiswas->links() }}
        </div>
      @endif
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
