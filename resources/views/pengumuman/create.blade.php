@extends('layouts.master')

@section('content')
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Buat Pengumuman</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Buat Pengumuman</h2>

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
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <form action="{{ url("/pengumuman") }}" method="post" >
                        <div class="">
                            <label>Isi</label>
                            <textarea name="body" class="form-control" id="" cols="30" rows="40"></textarea>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary float-right" value="Tambah" />
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