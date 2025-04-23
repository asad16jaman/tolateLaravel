@extends('layout.base')


@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
  .box{
    border-top-color: var(--teal) !important;
  }
</style>

@endsection



@section('content')



<!-- header start from hare  -->

@include('front.nav')

<!-- header end  -->

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center" >About Us</h2>
  <div class="h-line bg-dark"></div>
    <p class="text-center mt-3" >
 
    </p>
</div>

 <div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-2 order-md-1">
      <h3 class="mb-3" >This is Tanvir Ahmed</h3>
      <p>
      I am Tanvir Ahmed and I Belong to Mymensingh,Jamalpur . I Have Styding My BSC in cse program from Daffodil International University.
      </p>
    </div>
    <!-- <div class="col-lg-5 col-md-5 mb-4 order-lg-2  order-md-2  order-1">
          <img src="images/about/sa.jpg" class="w-100" >
    </div> -->
  </div> 
</div> 

<div class="container mt-5">
<div class="row">
  <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box" >
      <img src="{{ asset('assets/about/hotel.svg') }}" width="70px" >
      <h4 class="mt-3" >100+ ROOMS</h4>
    </div>

  </div>
  <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box" >
      <img src="{{ asset('assets/about/rating.svg') }}" width="70px" >
      <h4 class="mt-3" >100+ Reviews</h4>
    </div>

  </div>
  <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box" >
      <img src="{{ asset('assets/about/customers.svg') }}" width="45px" >
      <h4 class="mt-3" >200+ CUSTOMERS</h4>
    </div>

  </div>
  <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box" >
      <img src="{{ asset('assets/about/staff.svg') }}" width="70px" >
      <h4 class="mt-3" >200+ STAFFS</h4>
    </div>

  </div>

</div>
</div>



<h3 class="my-5 fw-bold h-font text-center" >MANAGEMENT TEAM</h3>

<div class="container px-4">
<div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      
      
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="{{ asset('assets/about/team.jpg') }}" class="w-100" >
        <h5 class="mt-2" >Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="{{ asset('assets/about/team.jpg') }}" class="w-100" >
        <h5 class="mt-2" >Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="{{ asset('assets/about/team.jpg') }}" class="w-100" >
        <h5 class="mt-2" >Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="{{ asset('assets/about/team.jpg') }}" class="w-100" >
        <h5 class="mt-2" >Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="{{ asset('assets/about/team.jpg') }}" class="w-100" >
        <h5 class="mt-2" >Random Name</h5>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- footer section starrt from hare  -->

@include('front.footer')
<!-- footer end................................................ -->



@endsection

  
@push('js')





<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>

    document.getElementsByTagName('body').className = "bg-light";
  var swiper = new Swiper(".mySwiper", {
 
  spacebetween: 40,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView:1
        },
        640: {
            slidesPerView:1
        },
        768: {
            slidesPerView:3
        },
        1024: {
            slidesPerView:3
        },
      }
  });
</script>
    
@endpush