@extends('layouts.master')

@section('content')
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Hasil penjualan</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Hasil penjualan</h2>

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
                    <form action="{{ url("/daftar-penjualan/$daftar->id/hasil-penjualan") }}" method="post" >
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input class="form-control" readonly type="text" name="nama" value="{{ $daftar->user->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="">No HP</label>
                            <input class="form-control" type="text" readonly name="no_handphone" value="{{ $daftar->user->no_handphone }}">
                        </div>

                        <div class="form-group">
                            <label for="">Nik</label>
                            <input class="form-control" type="text" readonly name="nik" value="{{ $daftar->user->nik }}">
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input class="form-control" type="text" readonly name="alamat" value="{{ $daftar->user->alamat }}">
                        </div>

                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input class="form-control" type="text" readonly name="kecamatan" value="{{ $daftar->user->kecamatan }}" >
                        </div>

                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input class="form-control" type="text" disabled name="kabupaten" value="{{ $daftar->user->kabupaten }}">
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Bal</label>
                            <input class="form-control" type="number" disabled name="jumlah_bal" value="{{ $daftar->jumlah_bal }}">
                        </div>

                        <div class="form-group">
                            <label for="">Bobot Laku</label>
                            <label for="">Great</label><br>
                            @foreach ($greate as $item)
                              <input type="checkbox" name="greate[]" value="{{ $item->id }}"> {{$item->nama}} 
                              <input type="number" class="form-control" name="bobot[]" />
                            <br>
                            @endforeach
                            
                        </div>

                        <div class="form-group">
                            <label for="">bobot tidak laku</label>
                            <input type="number" class="form-control" name="bobot_tidak_laku" id="">
                            <label for="">Alasan tidak laku</label>
                            <textarea class="form-control" name="alasan" id="" cols="30" rows="10"
                            style="  height: 100px !important;"
                            ></textarea>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary float-right" value="Proses" />
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