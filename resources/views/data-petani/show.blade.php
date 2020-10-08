@extends('layouts.master')

@section('content')
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Diri Anda</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Diri Anda</h2>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <p>Nama                     : {{ $user->nama }}</p>
                    <p>No Hp                    : {{ $user->no_handphone }}</p>
                    <p> nik                     : {{ $user->nik }}</p>
                    <p> alamat                  : {{ $user->alamat }}</p>
                    <p> rt                      : {{ $user->rt }}</p>
                    <p> rw                      : {{ $user->rw }}</p>
                    <p> kecamatan               : {{ $user->kabupaten }}</p>
                    <p> kabupaten               : {{ $user->kecamatan }}</p>
                    <p> nama ketua kelompok     : 
                        @if (!empty($user->nama_ketua_kelompok))
                            <span class="text-primary"> {{$user->nama_ketua_kelompok}} </span>    
                        @else
                            <span class="text-danger"> KOSONG </span>
                        @endif
                    </p>
                    <p> tahun tanam             :
                        @if (!empty($user->tahun_tanam))
                            <span class="text-primary"> {{$user->tahun_tanam}} </span>    
                        @else
                            <span class="text-danger"> KOSONG </span>
                        @endif
                    </p>
                    <p> jumlah paket            : 
                        @if (!empty($user->jumlah_paket))
                            <span class="text-primary"> {{$user->jumlah_paket}} </span>    
                        @else
                            <span class="text-danger"> KOSONG </span>
                        @endif
                    </p>
                    <p> Nomor Rekening            : 
                      @if (!empty($user->nomor_rekening))
                          <span class="text-primary"> {{$user->nomor_rekening}} </span>    
                      @else
                          <span class="text-danger"> KOSONG </span>
                      @endif
                  </p>
                    <a href="{{ url("/data-petani/$user->id/edit") }}" class="btn btn-sm btn-outline-primary">Edit</a>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </section>
      </div>
@endsection