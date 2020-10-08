@extends('layouts.master')

@section('content')
     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Transaksi Pembayaran</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Pricing</div>
            </div>
          </div>

          <div class="section-body">

            @foreach ($transaksi as $items)
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
                          <input type="number" disabled value="{{ $item->jumlah }}" class="form-control text-center">
                        </div>                  
                      </div>
                    </div>
                  </div>
                  
                @endforeach
              </div>
            @endforeach

              </div>
            </div>
        </section>
      </div>
@endsection