@extends('layouts.master')

@section('content')
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Barang</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Edit Barang</h2>

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
                    <form action="{{ url("/products/{{ $product->uuid }}") }}" method="post" >
                        <div class="form-group">
                            <img src="{{ asset("/storage/$product->gambar") }}" alt="">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="gambar" >
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text"  class="form-control" name="nama" value="{{ $product->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label>harga</label>
                            <input type="number" class="form-control" name="harga" value="{{ $product->harga }}" required>
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