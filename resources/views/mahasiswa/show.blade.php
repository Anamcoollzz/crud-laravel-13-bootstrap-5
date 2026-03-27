@extends('layouts.app')

@section('title', 'Detail Mahasiswa - ' . config('app.name', 'Laravel'))

@section('content')
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
@endsection
