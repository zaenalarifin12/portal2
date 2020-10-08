@extends('layouts.master')

@section('content')
     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Transaksi Pembayaran</h1>
          </div>

          <div class="section-body">

            @foreach ($transaksis as $items)
              <div class="row">
                @foreach ($items->itemTransaksis as $item)
                  <div class="col-4 col-md-3 col-lg-3">
                    <div class="pricing pricing-highlight">
                      <div class="pricing-title">
                        {{$item->nama}}
                      </div>
                      <div class="pricing-padding">
                            <div>
                              <p class="text-sm-center">
                                Rp. {{$item->harga}}
                              </p>
                            </div>
                          <div>Jumlah</div>
                        <div class="pricing-details">
                          <input type="text" disabled value="{{ $item->jumlah }}" class="form-control text-center">
                        </div>                  
                      </div>
                    </div>
                  </div>

                  <div class="col-6 col-md-6 col-lg-6">
                    <div class="pricing pricing-highlight">
                      <div class="pricing-padding">
                        <h4>Bukti Transfer</h4>
                          <div>
                            <img style="max-width: 400px" src="{{ asset("storage/transaksi/$items->gambar") }}" alt="">
                          </div>              
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>

              @if ($items->status == 0)
                <div class="row mb-4">
                  <div class="col ">
                      <form action="{{ url("/transaksi/$items->uuid") }}" method="post" enctype="multipart/form-data">
                          <label class="" for=""> Upload Struk / screenshot pembayaran</label><br>
                          <input class="form-control" type="file" name="gambar" id=""><br>
                          <input class="btn btn-primary" type="submit" value="Kirim">
                          @csrf
                          @method("PUT")
                      </form>
                  </div>
                  <div class="col"></div>
                  <div class="col"></div>
                </div>
              @endif

              {{-- @if ($items->status_pengiriman == 0)

                <p class="text-primary">Barang Belum dikirim</p>

                  @if (auth()->user()->isAdmin())
                    <div class="row mb-4">
                      <div class="col ">
                          <form action="{{ url("/transaksi/$items->uuid/pengiriman") }}" method="post" enctype="multipart/form-data">
                              <label for="">Status pengiriman barang</label><br>
                              <input class="btn btn-primary" type="submit" value="sudah dikirim">
                              @csrf
                              @method("PUT")
                          </form>
                      </div>
                      <div class="col"></div>
                      <div class="col"></div>
                    </div>
                  @endif

                @else
                <p class="text-success">Barang Sudah dikirim</p>
              @endif --}}
              
            @endforeach

              </div>
            </div>
        </section>
      </div>
@endsection