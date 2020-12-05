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
                              <div class="row">
                                <div class="col">
                                  <input type="number" class="form-control" placeholder="bal" name="bal[]" />
                                </div>
                                <div class="col">
                                  <input type="number" class="form-control" placeholder="bobot" name="bobot[]" />
                                </div>
                                <div class="col">
                                  <input type="number" class="form-control" placeholder="harga/kg" name="harga[]" />
                                </div>
                              </div>
                            <br>
                            @endforeach
                            
                        </div>

                        <div class="form-group">
                            <label for="">tidak laku</label>
                            <input type="number" class="form-control" name="bobot_tidak_laku" id="">
                            <label for="">Alasan tidak laku</label>
                            <select name="alasan" id="" class="form-control">
                              <option value="null">Tidak Ada </option>
                              <option value="Basah">Basah </option>
                              <option value="Jamur">Jamur</option>
                              <option value="Terlalu Kering">Terlalu Kering</option>
                              <option value="Plastik">Plastik</option>
                              <option value="Mik">Mik</option>
                              <option value="Hijau">Hijau </option>
                              <option value="Putung rokok">Putung rokok</option>
                              <option value="Bahan Metal">Bahan Metal </option>

                            </select>
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