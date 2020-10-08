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
            <h1>Petani</h1>
            <div class="section-header-breadcrumb">
              {{-- <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">DataTables</div> --}}
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Petani</h4>
                    {{-- <a href="{{ url("petani/create") }}" class="btn btn-outline btn-success">Tambahkan Petani</a> --}}
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th> nama</th>
                            <th> no_handphone</th>
                            <th> role</th>
                            <th> nik</th>
                            <th> alamat</th>
                            <th> kecamatan</th>
                            <th> kabupaten</th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $loop->index }}</td>
                                    <td> {{$item->nama}}           </td>
                                    <td> {{$item->no_handphone}}   </td>
                                    <td> {{$item->role}}           </td>
                                    <td> {{$item->nik}}            </td>
                                    <td> {{$item->alamat}}         </td>
                                    <td> {{$item->kecamatan}}      </td>
                                    <td> {{$item->kabupaten}}      </td>
                                    <td>
                                        <a href="{{ url("petani/$item->id/edit") }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ url("petani/$item->id") }}" method="post" style="display: inline" >
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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