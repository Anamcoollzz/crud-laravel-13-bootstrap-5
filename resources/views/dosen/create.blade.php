@extends('layouts.app')

@section('title', 'Tambah Dosen - ' . config('app.name', 'Laravel'))

@section('content')
  <main class="container py-4 py-md-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h1 class="h4 mb-0">Tambah Dosen</h1>
              <a href="{{ route('dosen.index') }}" class="btn btn-outline-secondary btn-sm">Kembali</a>
            </div>

            <form action="{{ route('dosen.store') }}" method="POST">
              @csrf

              <div class="mb-3">
                <label for="nidn" class="form-label">NIDN</label>
                <input type="text" id="nidn" name="nidn" class="form-control @error('nidn') is-invalid @enderror" value="{{ old('nidn') }}" required>
                @error('nidn')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                @error('nama')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="no_telp" class="form-label">No. Telepon</label>
                <input type="text" id="no_telp" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}" required>
                @error('no_telp')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-4">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}" required>
                @error('jabatan')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
