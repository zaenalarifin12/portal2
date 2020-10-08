@extends('layouts.master')

@section('content')
     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>

          <h1>Pengumuman Terbaru</h1>
          
          <p class="h3 my-3">{{ $pengumuman->body }}</p>
        </section>
      </div>
@endsection