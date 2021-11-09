@extends('Layout.app')
@section('title', 'Kegiatan Utama TENDIK')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Detail Data Kegiatan Utama Tenaga Kependidikan (TENDIK)
      </h3>
    </div>
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-4">Tanggal</dt>
        <dd class="col-sm-8">: {{ $tendikutama->tanggal }}</dd>
        <dt class="col-sm-4">Jam/ Waktu</dt>
        <dd class="col-sm-8">: {{ $tendikutama->jam_mulai }} - {{ $tendikutama->jam_selesai }}</dd>
        <dt class="col-sm-4">Aktifitas</dt>
        <dd class="col-sm-8">: {{ $tendikutama->aktifitas }}</dd>
        <dt class="col-sm-4">Isi Kegiatan</dt>
        <dd class="col-sm-8 text">: {{ $tendikutama->kegiatan }}</dd>
        <dt class="col-sm-4">Volume Laporan</dt>
        <dd class="col-sm-8">: {{ $tendikutama->volume_laporan }}</dd>
        <dt class="col-sm-4">Status Laporan</dt>
        <dd class="col-sm-8">: {{ $tendikutama->status }}</dd>
        @if($tendikutama->status === "Ditolak")
        <dt class="col-sm-4">Alasan Ditolak</dt>
        <dd class="col-sm-8">: {{ $tendikutama->alasan }}</dd>
        @endif
      </dl>
    </div>
    <!-- /.card-body -->
  </div>

  <a href="{{ route('tendikutama.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
  <a href="{{ route('tendikutama.edit', $tendikutama->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i> Edit</a>
@endsection
