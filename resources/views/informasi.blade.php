@extends('layouts.master')

@section('content')
     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengumuman </h1>
          </div>


            @foreach ($pengumuman as $item)
                <p>{{ $item->created_at }}</p>
                <p class="display-4">{{ $item->body }}</p>
            @endforeach


        </section>
      </div>
@endsection