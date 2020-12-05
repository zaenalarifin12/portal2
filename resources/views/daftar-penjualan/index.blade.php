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
                    
                        <a href="{{ url("daftar-penjualan/create") }}" class="btn btn-outline btn-success">Jual Tembakau Saya</a>    
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
                            <th class="text-capitalize">  metode pembayaran     </th>
                            <th class="text-capitalize">  Aksi                  </th>
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
                                    <td class="text-capitalize">  {{ $item->metode_pembayaran }}  </td>
                                    <td>
                                        @if (Auth::user()->role == 1)
                                        <a href="{{ url("/daftar-penjualan/$item->id/hasil-penjualan/create") }}" class="btn btn-info btn-sm">Proses</a>    
                                        @endif
                                        <form action="{{ url("/daftar-penjualan/$item->id") }}" method="post" style="display:inline">
                                          <input type="submit" class="btn btn-sm btn-danger" value="Hapus">
                                          @csrf
                                          @method("DELETE")
                                        </form>
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