@extends('layouts.app')

@section('title', 'Detail Kelas - ' . config('app.name', 'Laravel'))

@section('content')
  <main class="container py-4 py-md-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h1 class="h4 mb-0">Detail Kelas</h1>
              <a href="{{ route('kelas.index') }}" class="btn btn-outline-secondary btn-sm">Kembali</a>
            </div>

            <dl class="row mb-0">
              <dt class="col-sm-3">Kode Kelas</dt>
              <dd class="col-sm-9">{{ $kelas->kode_kelas }}</dd>

              <dt class="col-sm-3">Nama Kelas</dt>
              <dd class="col-sm-9">{{ $kelas->nama_kelas }}</dd>

              <dt class="col-sm-3">Tingkat</dt>
              <dd class="col-sm-9">{{ $kelas->tingkat }}</dd>

              <dt class="col-sm-3">Kapasitas</dt>
              <dd class="col-sm-9">{{ $kelas->kapasitas }}</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
