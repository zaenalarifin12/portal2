<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
       
        <li><a class="nav-link" href="{{ url("/") }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a class="nav-link" href="{{ url("/data-petani") }}"><i class="fa fa-user"></i><span><b>Data Petani</b></span></a></li>
        @if (Auth::user()->role == 1)
          <li><a class="nav-link" href="{{ url("/products") }}"><i class="fa fa-product-info"></i><span><b>Informasi</b></span></a></li>
        @endif

        <li><a class="nav-link" href="{{ url("/products") }}"><i class="fa fa-product-hunt"></i><span>Kebutuhan Petani</span></a></li>
        {{-- // jika admin maka ke index , jika petani maka ke show --}}
        
        <li><a class="nav-link" href="{{ url("/pembelian") }}"><i class="far fa-briefcase"></i> <span>Pembelian Kebutuhan Petani</span></a></li>
        
        <li><a class="nav-link" href="{{ url("/orders") }}"><i class="fa fa-cart-arrow-down  "></i> <span>Keranjang</span></a></li>

        <li><a class="nav-link" href="{{ url("/daftar-penjualan") }}"><i class="far fa-product-hunt "></i><span>Daftar Penjualan</span></a></li>
        <li><a class="nav-link" href="{{ url("/hasil-penjualan") }}"><i class="far fa-product-hunt "></i><span>Hasil Penjualan</span></a></li>
        <li><a class="nav-link" href="{{ url("/sales") }}"><i class="far fa-history"></i><span>Riwayat Penjualan Penjualan</span></a></li>
        @if (Auth::user()->role == 1)
        <li><a class="nav-link" href="{{ url("/pengumuman") }}"><i class="fa fa-info"></i><span>Pengumuman</span></a></li>
        @endif
        <li><a class="nav-link" href="{{ url("/pengaturan") }}"><i class="far fa-cogs"></i> <span>Pengaturan</span></a></li>       
      </ul>
    </aside>
  </div>