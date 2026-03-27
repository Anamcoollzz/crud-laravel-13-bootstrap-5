@extends('layouts.app')

@section('title', 'Edit Mahasiswa - ' . config('app.name', 'Laravel'))

@section('content')
  <main class="container py-4 py-md-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h1 class="h4 mb-0">Edit Mahasiswa</h1>
              <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary btn-sm">Kembali</a>
            </div>

            <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" id="nim" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim', $mahasiswa->nim) }}" required>
                @error('nim')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $mahasiswa->nama) }}" required>
                @error('nama')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan', $mahasiswa->jurusan) }}" required>
                @error('jurusan')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <input type="number" id="angkatan" name="angkatan" class="form-control @error('angkatan') is-invalid @enderror" value="{{ old('angkatan', $mahasiswa->angkatan) }}" min="2000" max="2100" required>
                @error('angkatan')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $mahasiswa->email) }}" required>
                @error('email')
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
