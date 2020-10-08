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
            <h1>Kebutuhan Petani</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <h4>Kebutuhan Petani</h4>
              @if (auth()->user()->isAdmin())
                <a href="{{ url("products/create") }}" class="btn btn-outline btn-success">Tambahkan Barang</a>
              @endif
            </div>

            <div class="row">

              @foreach ($product as $item)
                  
                <div class="col-4 col-md-3 col-lg-3">
                  <div class="pricing pricing-highlight">
                    <div class="pricing-title">
                      {{$item->nama}}
                    </div>
                    <div class="pricing-padding">
                          <div>
                            <img src="{{ $item->gambar }}" alt="gambar">
                            {{-- <p class="text-sm-center">
                              Rp. {{$item->harga}}
                            </p> --}}
                          </div>          
                      <div>
                        @if (auth()->user()->isAdmin())
                              <div>
                                <a href="{{ url("/products/$item->uuid/edit") }}" class="btn btn-sm btn-secondary">Edit</a>
                                <form action="{{ url("/products/$item->uuid") }}" method="post" style="display:inline">
                                  <input type="submit" class="btn btn-sm btn-danger" value="Hapus">
                                  @csrf
                                  @method("DELETE")
                                </form>
                              </div>
                            @else  
                              <div>
                                <form action="{{ url("/orders") }}" method="post">
                                  <input type="hidden" name="id" value="{{$item->uuid}}" />
                                  {{-- <input type="submit" class="btn btn-primary" value="Pesan" /> --}}
                                  @csrf
                                </form>
                              </div>  
                            @endif
                      </div>
                    </div>
                  </div>
                </div>

              @endforeach
              


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