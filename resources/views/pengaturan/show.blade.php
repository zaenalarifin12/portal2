@extends('layouts.master')

@section('content')
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Akun Anda</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Akun Anda</h2>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <p>Nama         :  {{ $user->nama }}</p>
                    <p>No Hp        : {{ $user->no_handphone }}</p>
                    <p> nik         : {{ $user->nik }}</p>
                    <p> alamat      : {{ $user->alamat }}</p>
                    <p> kecamatan   : {{ $user->kecamatan }}</p>
                    <p> kabupaten   : {{ $user->kabupaten }}</p>
                    <a href="{{ url("/pengaturan/edit") }}" class="btn btn-sm btn-outline-primary">Edit</a>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </section>
      </div>
@endsection