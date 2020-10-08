@extends('layouts.master')

@section('content')
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Akun</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Edit Akun</h2>

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
                    <form action="{{ url("/pengaturan") }}" method="post" >
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input class="form-control" type="text" name="nama" value="{{ $user->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="">No HP</label>
                            <input class="form-control" type="text" name="no_handphone" value="{{ $user->no_handphone }}">
                        </div>

                        <div class="form-group">
                            <label for="">Nik</label>
                            <input class="form-control" type="text" name="nik" value="{{ $user->nik }}">
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input class="form-control" type="text" name="alamat" value="{{ $user->alamat }}">
                        </div>

                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input class="form-control" type="text" name="kecamatan" value="{{ $user->kecamatan }}" >
                        </div>

                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input class="form-control" type="text" name="kabupaten" value="{{ $user->kabupaten }}">
                        </div>

                        <br>
                        <input type="submit" class="btn btn-primary float-right" value="Edit" />
                        @csrf
                        @method("PUT")
                    </form>
                    
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </section>
      </div>
@endsection