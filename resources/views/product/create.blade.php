@extends('layouts.master')

@section('content')
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Barang</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Advanced Forms</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Tambah Barang</h2>

              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <form action="{{ url("/products") }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="gambar" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text"  class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label>harga</label>
                            <input type="number" class="form-control" name="harga" required>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="tambah" />

                        @csrf
                    </form>
                    
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </section>
      </div>
@endsection