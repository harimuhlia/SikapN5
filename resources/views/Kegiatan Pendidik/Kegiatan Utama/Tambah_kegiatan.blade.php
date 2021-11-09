@extends('Layout.app')
@section('title', 'Tambah Data Kegiatan')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"><i class="fas fa-plus" title="Tambah Data"></i> Form Tambah Data Kegiatan Utama Pendidik</h3>
    <div class="card-tools">
      <button
        type="button"
        class="btn btn-tool"
        data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button
        type="button" class="btn btn-tool"
        data-card-widget="remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('kegiatanpendidik.store') }}" method="POST">
          {{ csrf_field('PUT') }}
        <div class="form-group">
          <label for="tanggalKegiatan">Tanggal Kegiatan</label>
          <input type="Date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" placeholder="Masukan tanggal" value="{{ old('tanggal') }}">
          @error('tanggal')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="jamMulai">Jam Mulai Kegaiatan</label>
          <input type="time" name="jam_mulai" class="form-control @error('jam_mulai') is-invalid @enderror" placeholder="Masukan Jam Mulai" value="{{ old('jam_mulai') }}">
          @error('jam_mulai')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="jamSelesai">Jam Selesai Kegiatan</label>
          <input type="time" name="jam_selesai" class="form-control @error('jam_selesai') is-invalid @enderror" placeholder="Masukan Jam Selesai" value="{{ old('jam_selesai') }}">
          @error('jam_selesai')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <input type="hidden" name="keterangan" value="utama">
        <div class="form-group">
          <label>Aktifitas</label>
          <select class="form-control select2" name="aktifitas" style="width: 100%">
            <option selected="selected">-- Pilih Aktifitas --</option>
            <option>WFO</option>
            <option>WFH</option>
          </select>
        </div>
      </div>

{{-- Posisi Sebelah Kanan --}}
      <!-- /.col -->
      <div class="col-md-6">
        <div class="form-group">
          <label>Volume</label>
          <select class="form-control select2" name="volume_laporan" style="width: 100%">
            <option selected="selected">-- Pilih Volume --</option>
            <option>1 Laporan</option>
            <option>2 Laporan</option>
            <option>3 Laporan</option>
            <option>4 Laporan</option>
            <option>5 Laporan</option>
          </select>
        </div>
         <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" name="kegiatan" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
        {{-- <div class="form-group">
          <label>Input Kegiatan</label>
          <textarea class="form-control" name="kegiatan" rows="8" placeholder="Enter ..."></textarea>
        </div>
      </div>
        </div>
        <!-- /.form-group --> --}}
        <div class="card-footer">
          <a href="{{ route('kegiatanpendidik.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
          <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
<!-- /.card -->
@endsection
