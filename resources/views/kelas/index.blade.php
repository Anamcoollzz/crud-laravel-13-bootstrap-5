@extends('layouts.app')

@section('title', 'Data Kelas - ' . config('app.name', 'Laravel'))

@section('content')
  <main class="container py-4 py-md-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3 mb-0">Data Kelas</h1>
      <a href="{{ route('kelas.create') }}" class="btn btn-primary">Tambah Kelas</a>
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
              <th>Kode Kelas</th>
              <th>Nama Kelas</th>
              <th>Tingkat</th>
              <th>Kapasitas</th>
              <th class="text-end">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kelas as $item)
              <tr>
                <td>{{ $loop->iteration + ($kelas->currentPage() - 1) * $kelas->perPage() }}</td>
                <td>{{ $item->kode_kelas }}</td>
                <td>{{ $item->nama_kelas }}</td>
                <td>{{ $item->tingkat }}</td>
                <td>{{ $item->kapasitas }}</td>
                <td class="text-end">
                  <a href="{{ route('kelas.show', $item) }}" class="btn btn-sm btn-info text-white">Detail</a>
                  <a href="{{ route('kelas.edit', $item) }}" class="btn btn-sm btn-warning text-white">Edit</a>
                  <form action="{{ route('kelas.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="6" class="text-center py-4 text-secondary">Belum ada data kelas.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      @if ($kelas->hasPages())
        <div class="card-footer bg-white">
          {{ $kelas->links() }}
        </div>
      @endif
    </div>
  </main>
@endsection
