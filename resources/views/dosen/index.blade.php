@extends('layouts.app')

@section('title', 'Data Dosen - ' . config('app.name', 'Laravel'))

@section('content')
  <main class="container py-4 py-md-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3 mb-0">Data Dosen</h1>
      <a href="{{ route('dosen.create') }}" class="btn btn-primary">Tambah Dosen</a>
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
              <th>NIDN</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No. Telepon</th>
              <th>Jabatan</th>
              <th class="text-end">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($dosens as $dosen)
              <tr>
                <td>{{ $loop->iteration + ($dosens->currentPage() - 1) * $dosens->perPage() }}</td>
                <td>{{ $dosen->nidn }}</td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->no_telp }}</td>
                <td>{{ $dosen->jabatan }}</td>
                <td class="text-end">
                  <a href="{{ route('dosen.show', $dosen) }}" class="btn btn-sm btn-info text-white">Detail</a>
                  <a href="{{ route('dosen.edit', $dosen) }}" class="btn btn-sm btn-warning text-white">Edit</a>
                  <form action="{{ route('dosen.destroy', $dosen) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="7" class="text-center py-4 text-secondary">Belum ada data dosen.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      @if ($dosens->hasPages())
        <div class="card-footer bg-white">
          {{ $dosens->links() }}
        </div>
      @endif
    </div>
  </main>
@endsection
