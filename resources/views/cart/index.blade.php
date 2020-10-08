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

            <div class="row">
           
              <div class="col-4 col-md-3 col-lg-3">
                <div class="pricing pricing-highlight">
                  <div class="pricing-title">
                    Small Team
                  </div>
                  <div class="pricing-padding">
                        <div>
                          <p class="text-sm-center">
                            Rp 100.000
                          </p>
                        </div>
                      <div>Jumlah</div>
                    <div class="pricing-details">
                      <input type="text" class="form-control">
                    </div>                  
                  </div>
                </div>
              </div>
            
            </div>

            <div class="row float-right">
                <button class="btn btn-primary btn-lg ">Bayar</button>
            </div>
          </div>
        </section>
      </div>
@endsection