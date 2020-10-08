@extends('layouts.master')

@section('content')
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Data Diri Anda</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Edit Data Diri Anda</h2>

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
                    <form action="{{ url("/data-petani/$user->id") }}" method="post" >
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input class="form-control" type="text" name="nama" disabled value="{{ $user->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="">No HP</label>
                            <input class="form-control" type="text" name="no_handphone" disabled value="{{ $user->no_handphone }}">
                        </div>

                        <div class="form-group">
                            <label for="">Nik</label>
                            <input class="form-control" type="text" name="nik" disabled value="{{ $user->nik }}">
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input class="form-control" type="text" name="alamat" disabled value="{{ $user->alamat }}">
                        </div>

                        <div class="form-group">
                          <label for="">rt</label>
                          <input class="form-control" type="number" name="rt" value="{{ $user->rt }}">
                      </div>

                        <div class="form-group">
                            <label for="">rw</label>
                            <input class="form-control" type="number" name="rw" value="{{ $user->rw }}">
                        </div>

                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input class="form-control" type="text" name="kecamatan" disabled value="{{ $user->kecamatan }}" >
                        </div>

                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input class="form-control" type="text" name="kabupaten" disabled value="{{ $user->kabupaten }}">
                        </div>

                        <div class="form-group">
                            <label for="">nama ketua kelompok</label>
                            <input class="form-control" type="text" name="nama_ketua_kelompok" value="{{ $user->nama_ketua_kelompok }}">
                        </div>

                        
                        <div class="form-group">
                            <label for="">tahun tanam</label>
                            <input class="form-control" type="text" pattern="[0-9]{4}" name="tahun_tanam" value="{{ $user->tahun_tanam }}">
                        </div>

                        <div class="form-group">
                            <label for="">jumlah paket</label>
                            <input class="form-control" type="number" name="jumlah_paket" value="{{ $user->jumlah_paket }}">
                        </div>

                        <div class="form-group">
                          <label for="">nomor Rekening</label>
                          <input class="form-control" type="number" name="nomor_rekening" value="{{ $user->nomor_rekening }}">
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