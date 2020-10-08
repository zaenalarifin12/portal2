@extends('layouts.master')

@section('content')
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Jual</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Advanced Forms</div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Jumlah bal</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>metode pembayaran</label>
                            <select name="" id="">
                                <option value="">Transfer</option>
                                <option value="">Ambil Sendiri</option>
                            </select>
                        </div>
                        
                        <input type="submit" class="btn btn-primary float-right" value="Jual" />

                        @csrf
                    </form>
                    
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </section>
      </div>
@endsection