@extends('layouts.master')

@section('content')
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Daftar penjualan</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Daftar penjualan</h2>

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
                    <form action="{{ url("/daftar-penjualan") }}" method="post" >
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input class="form-control" readonly type="text" name="nama" value="{{ $user->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="">No HP</label>
                            <input class="form-control" type="text" readonly name="no_handphone" value="{{ $user->no_handphone }}">
                        </div>

                        <div class="form-group">
                            <label for="">Nik</label>
                            <input class="form-control" type="text" readonly name="nik" value="{{ $user->nik }}">
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input class="form-control" type="text" readonly name="alamat" value="{{ $user->alamat }}">
                        </div>

                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input class="form-control" type="text" readonly name="kecamatan" value="{{ $user->kecamatan }}" >
                        </div>

                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input class="form-control" type="text" disabled name="kabupaten" value="{{ $user->kabupaten }}">
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Bal</label>
                            <input class="form-control" type="number" name="jumlah_bal">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Pembayaran</label>
                            <div class="selectgroup w-100">
                              <label class="selectgroup-item">
                                <input type="radio" name="pembayaran" value="0" class="selectgroup-input" checked="">
                                <span class="selectgroup-button">Ditempat</span>
                              </label>
                              <label class="selectgroup-item">
                                <input type="radio" name="pembayaran" value="1" class="selectgroup-input">
                                <span class="selectgroup-button">Rekening</span>
                              </label>
                            </div>
                          </div>

                        <br>
                        <input type="submit" class="btn btn-primary float-right" value="Daftar" />
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