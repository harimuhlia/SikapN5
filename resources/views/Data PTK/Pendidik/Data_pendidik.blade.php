@extends('Layout.app')
@section('title', 'Data Pendidik')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
    <div class="card-header">
      @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-check"></i> Alhamdulillah</h5>
          {{ Session::get('success') }}
        </div>
        {{-- <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div> --}}
      @endif
      @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-ban"></i> Astagfirullah</h5>
          {{ Session::get('error') }}
        </div>
        {{-- <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div> --}}
      @endif
      <h3 class="card-title"><i class="fas fa-clipboard-list"></i> Semua Data Pendidik</h3>
      {{-- <div class="card-tools">
        <a href="{{ route('datapendidik.create') }}" class="btn btn-primary btn-sm "><i class="fas fa-plus" title="Tambah Data"></i> Tambah Data</a>
      </div> --}}
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Lengkap</th>
          <th>Jenis Kelamin</th>
          <th>Penugasan</th>
          <th>Foto</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pendidik as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->role }}</td>
            <td>{{ $item->upload_img }}</td>
            <td>
            <a href="{{ route('datapendidik.show', $item->id) }}" class="btn btn-success btn-sm " title="Detail"><i class="fas fa-eye"></i> Lihat</a>
            </td>
          </tr>
        @endforeach
          <tr>
          <th>No</th>
          <th>Nama Lengkap</th>
          <th>Jenis Kelamin</th>
          <th>Penugasan</th>
          <th>Foto</th>
          <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
</div>
</div>
<!-- /.modal -->
@endsection
@section('javascript')
    <!-- page script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection