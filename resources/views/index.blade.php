@extends('layouts.master')

@section('style')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />

@endsection

@section('content')
     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>

          <div class="owl-carousel" >
            <div> <img style="height: 400px !important; width:auto; margin: 0 auto" src="{{ asset("bg/1.jpg") }}" alt=""> </div>
            <div> <img style="height: 400px !important; width:auto; margin: 0 auto" src="{{ asset("bg/2.jpg") }}" alt=""> </div>
            <div> <img style="height: 400px !important; width:auto; margin: 0 auto" src="{{ asset("bg/3.jpg") }}" alt=""> </div>
            <div> <img style="height: 400px !important; width:auto; margin: 0 auto" src="{{ asset("bg/4.jpg") }}" alt=""> </div>
            <div> <img style="height: 400px !important; width:auto; margin: 0 auto" src="{{ asset("bg/5.jpg") }}" alt=""> </div>
            <div> <img style="height: 400px !important; width:auto; margin: 0 auto" src="{{ asset("bg/6.jpg") }}" alt=""> </div>
          </div>

        </section>
      </div>
@endsection

@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
            items: 1,
            singleItem: true,
            autoPlay: 3000
        });
    });
  </script>
  
@endsection