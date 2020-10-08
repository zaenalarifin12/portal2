@extends('layouts.master')

@section('style')
    

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset("node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{ asset("node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css")}}">

@endsection

@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Daftar Penjualan</h1>
      
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Daftar Penjualan</h4>
                    
                    @empty($daftar_penjualan->count())
                        <a href="{{ url("daftar-penjualan/create") }}" class="btn btn-outline btn-success">Jual Tembakau Saya</a>    
                    @endempty
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th class="text-capitalize">  nik                   </th>
                            <th class="text-capitalize">  nama                  </th>
                            <th class="text-capitalize">  alamat                </th>
                            <th class="text-capitalize">  kecamatan             </th>
                            <th class="text-capitalize">  nama ketua kelompok   </th>
                            <th class="text-capitalize">  jumlah bal            </th>
                            <th class="text-capitalize">  jumlah uang     </th>
                            <th class="text-capitalize">  Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar_penjualan as $item)
                                <tr>
                                    <td class="text-center">      {{ $loop->iteration }}</td>
                                    <td class="text-capitalize">  {{ $item->user->nik }}</td>
                                    <td class="text-capitalize">  {{ $item->user->nama }} </td>
                                    <td class="text-capitalize">  {{ $item->user->alamat }} </td>
                                    <td class="text-capitalize">  {{ $item->user->kecamatan }} </td>
                                    <td class="text-capitalize">  {{ $item->user->nama_ketua_kelompok }}  </td>
                                    <td class="text-capitalize">  {{ $item->jumlah_bal }} </td>
                                    <td class="text-capitalize"> 

                                    @php
                                        $hasil = 0;
                                    @endphp

                                    @foreach ($item->laku as $item2)
                                        @php
                                            $hasil_sementara = $item2->bobot_laku * $item2->greate->harga;
                                            $hasil += $hasil_sementara;
                                        @endphp
                                    @endforeach
                                        Rp . {{ $hasil }}
                                    </td>
                                   
                                    <td>
                                      @if ($item->status == 1)
                                        <p class="font-weight-bold text-success">Lunas</p>
                                      @else
                                        @if (Auth::user()->role == 1)
                                          <form action="{{ url("/hasil-penjualan/status/$item->id") }}" method="post" >
                                            <input class="btn btn-sm btn-success" type="submit" value="Lunas">
                                            @method("PUT")
                                            @csrf
                                          </form>    
                                        @endif
                                        
                                      @endif
                                      
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    
@endsection

@section('script')
    
    <!-- JS Libraies -->
    <script src=" {{ asset("node_modules/datatables/media/js/jquery.dataTables.min.js")}}"></script>
    <script src=" {{ asset("node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src=" {{ asset("node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js")}}"></script>
  

    <!-- Page Specific JS File -->
    <script src="{{ asset("assets/js/page/modules-datatables.js")}}"></script>

@endsection