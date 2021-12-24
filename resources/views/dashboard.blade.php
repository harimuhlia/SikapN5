@extends('Layout.app')
@section('title', 'Dashboard Utama')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
        
                      <div class="info-box-content">
                        <span class="info-box-text">CPU Traffic</span>
                        <span class="info-box-number">
                          10
                          <small>%</small>
                        </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- fix for small devices only -->
                  <div class="clearfix hidden-md-up"></div>
        
                  <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
        
                      <div class="info-box-content">
                        <span class="info-box-text">Sales</span>
                        <span class="info-box-number">760</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                </div>
                <!-- /.row -->
        
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Berita</h5>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12">
                            <p>
                              <strong>Judul Berita</strong>
                            </p>
                            <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem optio laboriosam alias blanditiis id ex tempora quos laborum distinctio, odio qui, est omnis autem illo. Ab rem culpa perspiciatis officiis.
                            </p>
                          </div>
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- ./card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Informasi</h5>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12">
                            <p>
                              <strong>Judul Informasi</strong>
                            </p>
                            <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem optio laboriosam alias blanditiis id ex tempora quos laborum distinctio, odio qui, est omnis autem illo. Ab rem culpa perspiciatis officiis.
                            </p>
                          </div>
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- ./card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
      
@endsection