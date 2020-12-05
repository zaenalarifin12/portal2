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

            <form action="{{url("/pembelian")}}" method="post" enctype="multipart/form-data">
@csrf
              <div class="row">
                  
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                          <th class="text-center">      No </th>
                          <th class="text-capitalize">  Nama </th>
                          <th class="text-capitalize">  Foto </th>
                          <th class="text-capitalize">  Jumlah </th>
                          <th class="text-capitalize">  Total </th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($product as $item)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->gambar }}</td>
                            <td>
                              <input type="number" class="form-control produk" name="jumlah[]" id="{{ $item->id }}" value="">
                              <input type="hidden" name="produk[]" value="{{ $item->id }}">
                            </td>
                            <td>
                              <input type="text" class="form-control hasil" name="hasil[]" id="{{ "hasil-" . $item->id }}" disabled >
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>

                
              
            </div>
            <div class="row">
              <div class="col">
                <p class="float-right display-4">Total : <span id="total" class="text-primary display-4"></span></p>
              </div>                
            </div>
            <div class="row">
              <div class="col">
                <p class="btn btn-primary btn-lg float-right" id="pesan">Pesan</p>
              </div>
            </div>
            <div class="row">
              <div class="col" id="pembayaran">
                
              </div>
            </div>
            <div class="row">
              <div class="col" >
                <div class="float-right" id="metode">

                </div>
              </div>
            </div>
            
          </form>

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

    <script>
      $(document).ready(function(){

        var total = 0;
        $(`#total`).text(total);

        $('.produk').on('keyup', function () {

          var id = $(this).attr('id');

          $.ajax({
              url : "{{ url('/api/produk') }}" + "/" + id,
              type:'GET',
              dataType: 'json',
              success: function(response) {
                var jumlah = $(`#${id}`).val()

                var hasil = parseInt(jumlah) * parseInt(response.harga)

                $(`#hasil-${id}`).val(hasil)
                
                var sum = 0;
                $('.hasil').each(function(){
                  if($(this).val() != ""){
                      sum += parseFloat($(this).val());
                  }
                });

                $(`#total`).text(sum)
              }
          })

        })


        $('#pesan').one("click", function() {
          $("#pembayaran").append(`
            <p class="btn btn-info float-right" id="rekening">Transfer</p>          
            <button class="btn btn-success float-right mr-4" id="ditempat" >ditempat</button>          
          `)

          $('#rekening').one("click", function() {
            $("#gambar").remove()
            $("#tf").remove()
            $("#bukti").remove()
            $("#co").remove()

            $("#metode").append(`
              <div class="row" id="tf">
                <p class="">Transfer ke rekening 098098908098</p>
              </div>
              
              <div class="row " id="tf">
                <label id="bukti" class="">Upload Bukti Transfer </label>
              </div>
              
              <div class="row" id="gambar">
                <input type="file" name="gambar" class=""  />
              </div>

              <div class="row mt-3" id="co">
                <input type="submit" class="btn btn-success float-right" value="checkout" />
              </div>
              
            `)
          })
          
        })


      });
    </script>

    Total

    pesan 
      metode rekening
      metode upload struk
        langsung upload struk

      return response
        notifikasi admin(stay)
        lihat hasil pesanan, 
        lihat status | apakah sudah terkirim
        ||||||||||||||||||||||||||||||||||||


@endsection