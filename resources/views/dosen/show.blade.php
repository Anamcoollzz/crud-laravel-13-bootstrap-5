@extends('layouts.app')

@section('title', 'Detail Dosen - ' . config('app.name', 'Laravel'))

@section('content')
  <main class="container py-4 py-md-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h1 class="h4 mb-0">Detail Dosen</h1>
              <a href="{{ route('dosen.index') }}" class="btn btn-outline-secondary btn-sm">Kembali</a>
            </div>

            <dl class="row mb-0">
              <dt class="col-sm-3">NIDN</dt>
              <dd class="col-sm-9">{{ $dosen->nidn }}</dd>

              <dt class="col-sm-3">Nama</dt>
              <dd class="col-sm-9">{{ $dosen->nama }}</dd>

              <dt class="col-sm-3">Email</dt>
              <dd class="col-sm-9">{{ $dosen->email }}</dd>

              <dt class="col-sm-3">No. Telepon</dt>
              <dd class="col-sm-9">{{ $dosen->no_telp }}</dd>

              <dt class="col-sm-3">Jabatan</dt>
              <dd class="col-sm-9">{{ $dosen->jabatan }}</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
