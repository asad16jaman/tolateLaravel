@extends('layout.base')


@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

@endsection

<!-- class= -->

@section('content')

@include('front.nav')

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center" >our Room</h2>
  <div class="h-line bg-dark"></div>
    
</div>

<div class="container">
  <div class="row">
   <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
   <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow ">
        <div class="container-fluid flex-lg-column align-items-stretch">
          <H4 class="mt-2" >FILTERS</H4>
          <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
          <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size: 18px;" >Search By Location</h5>
            <label  class="form-label mb-3" >Division </label> 	
            <input type="text" id="division" value="{{ isset(session('olddata')['division']) ? session('olddata')['division'] : "" }}" class="form-control shadow-none mb-3" id="">

            <label  class="form-label mb-3" >Distric </label> 	
            <input type="text" id="district" value="{{ isset(session('olddata')['district']) ? session('olddata')['district'] : "" }}" class="form-control shadow-none mb-3" id="">

            <label  class="form-label mb-3" >Thana </label> 	
            <input type="text" id="thana" value="{{ isset(session('olddata')['thana']) ? session('olddata')['thana'] : "" }}" class="form-control shadow-none mb-3" id="">

            <label  class="form-label mb-3" >Area </label> 	
            <input type="text" id="area" value="{{ isset(session('olddata')['area']) ? session('olddata')['area'] : "" }}" class="form-control shadow-none mb-3" id="">

          </div>

          <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size: 18px;" >Range</h5>

            <div class="mb-2">
              <input type="text" value="{{ isset(session('olddata')['maxPrice']) ? session('olddata')['maxPrice'] : "" }}" id="maxPrice" class="form-control shadow-none mb-3" placeholder="max price">
              <input type="text" value="{{ isset(session('olddata')['minPrice']) ? session('olddata')['minPrice'] : "" }}" id="minPrice" class="form-control shadow-none mb-3" placeholder="min price">
            </div>
            
                            
          </div>
         

          </div>
        </div>
  </nav>
   </div>

  <div class="col-lg-9 col-md-12 px-4">


  <div class="card mb-4 border-0 shadow" >

  
      <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 md-lg-0 md-md-0 mb-3">
              <img src="{{ asset('assets/rooms/IMG_42663.png') }}" class="img-fluid rounded-start" style="height: 200px; width: 100%; border-radius: 3px;" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
             <h5>Luxary Room</h5>
             <div class="features mb-3">
                            <h6 class="mb-3" >Features</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                2 Rooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Bathrooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Balcony
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               3 sofa
                              </span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1" >Facilities</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                  wifi
                                  </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            Televition
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               AC
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               Room Heater
                              </span>

                        </div>
                        <div class="guests">
                        <h6 class="mb-1" >Guests</h6>
                        <span class="badge bg-light text-dark  text-warp ">
                               5 Adults
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            4 children
                              </span>
                        </div>
            </div>

            <div class="col-md-2 text-center">
              <h6 class="mb-4" >৳111 per night</h6>
              <!-- <a href="room.html" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a> -->
              <a href="{{ route('housedetail') }}" class="btn btn-sm w-100 btn-outline-dark shadow-none ">More Details</a>
        </div>
    </div>


    <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 md-lg-0 md-md-0 mb-3">
              <img src="{{ asset('assets/rooms/IMG_42663.png') }}" class="img-fluid rounded-start" style="height: 200px; width: 100%; border-radius: 3px;" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
             <h5>Luxary Room</h5>
             <div class="features mb-3">
                            <h6 class="mb-3" >Features</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                2 Rooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Bathrooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Balcony
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               3 sofa
                              </span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1" >Facilities</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                  wifi
                                  </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            Televition
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               AC
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               Room Heater
                              </span>

                        </div>
                        <div class="guests">
                        <h6 class="mb-1" >Guests</h6>
                        <span class="badge bg-light text-dark  text-warp ">
                               5 Adults
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            4 children
                              </span>
                        </div>
            </div>

            <div class="col-md-2 text-center">
              <h6 class="mb-4" >৳111 per night</h6>
              <!-- <a href="room.html" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a> -->
              <a href="{{ route('housedetail') }}" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
        </div>
    </div>

    <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 md-lg-0 md-md-0 mb-3">
              <img src="{{ asset('assets/rooms/IMG_42663.png') }}" class="img-fluid rounded-start" style="height: 200px; width: 100%; border-radius: 3px;" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
             <h5>Luxary Room</h5>
             <div class="features mb-3">
                            <h6 class="mb-3" >Features</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                2 Rooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Bathrooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Balcony
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               3 sofa
                              </span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1" >Facilities</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                  wifi
                                  </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            Televition
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               AC
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               Room Heater
                              </span>

                        </div>
                        <div class="guests">
                        <h6 class="mb-1" >Guests</h6>
                        <span class="badge bg-light text-dark  text-warp ">
                               5 Adults
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            4 children
                              </span>
                        </div>
            </div>

            <div class="col-md-2 text-center">
              <h6 class="mb-4" >৳111 per night</h6>
              <!-- <a href="room.html" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a> -->
              <a href="{{ route('housedetail') }}" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
        </div>
    </div>

    <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 md-lg-0 md-md-0 mb-3">
              <img src="{{ asset('assets/rooms/IMG_42663.png') }}" class="img-fluid rounded-start" style="height: 200px; width: 100%; border-radius: 3px;" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
             <h5>Luxary Room</h5>
             <div class="features mb-3">
                            <h6 class="mb-3" >Features</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                2 Rooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Bathrooms
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               1 Balcony
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               3 sofa
                              </span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1" >Facilities</h6>
                            <span class="badge bg-light text-dark  text-warp ">
                                  wifi
                                  </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            Televition
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               AC
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                               Room Heater
                              </span>

                        </div>
                        <div class="guests">
                        <h6 class="mb-1" >Guests</h6>
                        <span class="badge bg-light text-dark  text-warp ">
                               5 Adults
                              </span>
                              <span class="badge bg-light text-dark  text-warp ">
                            4 children
                              </span>
                        </div>
            </div>

            <div class="col-md-2 text-center">
              <h6 class="mb-4" >৳111 per night</h6>
              <!-- <a href="room.html" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a> -->
              <a href="{{ route('housedetail') }}" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
        </div>
    </div>





</div>



 

  </div>


  </div>
</div>





@include('front.footer')

@endsection

@push('js')

<script>
    document.getElementsByTagName('body').className = "bg-light";


    function getallfilterdata(){

      return {
        division : document.getElementById('division').value,
        district : document.getElementById('district').value,
        thana : document.getElementById('thana').value,
        area : document.getElementById('area').value,
        maxPrice : parseInt(document.getElementById('maxPrice').value),
        minPrice : parseInt(document.getElementById('minPrice').value),
      }
    }

    function doingFilter(event) {
      
      if (event.key === "Enter") {

        let queryData = getallfilterdata();

        if(!queryData.maxPrice){
          delete queryData.maxPrice;
        }
        if(!queryData.minPrice){
          delete queryData.minPrice;
        }
        if(queryData.maxPrice && queryData.minPrice){
          if(queryData.maxPrice<=queryData.minPrice){
            alert("max price must be grater then min Price")
            return 0;
          }
        }

        
  
        const queryParams = Object.entries(queryData)
          .filter(([key, value]) => value !== "")
          .map(([key, value]) => `${encodeURIComponent(key)}=${encodeURIComponent(value)}`)
          .join("&");
  
        const baseUrl = "http://127.0.0.1:8000/houses";
        const finalUrl = queryParams ? `${baseUrl}?${queryParams}` : baseUrl;
          window.location.href= finalUrl
      }
  }

  

    document.getElementById("division").addEventListener("keyup", doingFilter);
    document.getElementById("district").addEventListener("keyup", doingFilter);
    document.getElementById("thana").addEventListener("keyup", doingFilter);
    document.getElementById("area").addEventListener("keyup", doingFilter);

    document.getElementById("maxPrice").addEventListener("keyup", doingFilter);
    document.getElementById("minPrice").addEventListener("keyup", doingFilter);





















</script>

@endpush









