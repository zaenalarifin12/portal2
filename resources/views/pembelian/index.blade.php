@extends('layouts.master')

@section('style')
    

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">

@endsection

@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pembelian Petani</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <h4>Pembelian</h4>
            </div>

            <div class="row">
                  
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                        <th class="text-center">      No </th>
                        <th class="text-capitalize">  Nama </th>
                        <th class="text-capitalize">  Foto </th>
                        <th class="text-capitalize">  Aksi </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->nama }}</td>
                          <td>{{ $item->gambar }}</td>
                          <td>
                            <form action="" method="post">
                              <a href="">Pesan</a>
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