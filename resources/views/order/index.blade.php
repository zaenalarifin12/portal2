@extends('layouts.master')

@section('content')
     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Keranjang</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Pricing</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Keranjang</h2>

            @if ($carts->count() == 0)
                <p>Barang yang anda pesan masih kosong</p>
            @else
            <form action="{{ url("/transaksi") }}" method="post">
              <div class="row">
                @foreach ($carts as $item)
                  <div class="col-4 col-md-3 col-lg-3">
                    <div class="pricing pricing-highlight">
                      <div class="pricing-title">
                        <input type="hidden" name="id[]" value="{{$item->id}}">
                        {{$item->product->nama}}
                      </div>
                      <div class="pricing-padding">
                            <div>
                              <p class="text-sm-center">
                                Rp. {{$item->product->harga}}
                              </p>
                            </div>
                          <div>Jumlah</div>
                        <div class="pricing-details">
                          <input type="text" name="jumlah[]" value="{{$item->jumlah}}" class="form-control active text-center">
                        </div>                  
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="row float-right">
                  <button class="btn btn-primary btn-lg ">Bayar</button>
              @csrf
              </div>
            </div>    
            @endif
            
          </form>
        </section>
      </div>
@endsection