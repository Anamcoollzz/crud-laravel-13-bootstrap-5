@extends('layouts.app')

@section('title', 'Edit Kelas - ' . config('app.name', 'Laravel'))

@section('content')
  <main class="container py-4 py-md-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h1 class="h4 mb-0">Edit Kelas</h1>
              <a href="{{ route('kelas.index') }}" class="btn btn-outline-secondary btn-sm">Kembali</a>
            </div>

            <form action="{{ route('kelas.update', $kelas) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label for="kode_kelas" class="form-label">Kode Kelas</label>
                <input type="text" id="kode_kelas" name="kode_kelas" class="form-control @error('kode_kelas') is-invalid @enderror" value="{{ old('kode_kelas', $kelas->kode_kelas) }}" required>
                @error('kode_kelas')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <input type="text" id="nama_kelas" name="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror" value="{{ old('nama_kelas', $kelas->nama_kelas) }}" required>
                @error('nama_kelas')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="tingkat" class="form-label">Tingkat</label>
                <input type="number" id="tingkat" name="tingkat" class="form-control @error('tingkat') is-invalid @enderror" value="{{ old('tingkat', $kelas->tingkat) }}" min="1" max="12" required>
                @error('tingkat')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-4">
                <label for="kapasitas" class="form-label">Kapasitas</label>
                <input type="number" id="kapasitas" name="kapasitas" class="form-control @error('kapasitas') is-invalid @enderror" value="{{ old('kapasitas', $kelas->kapasitas) }}" min="1" max="100" required>
                @error('kapasitas')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
