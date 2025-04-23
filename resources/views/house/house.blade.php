
@extends('layout.base')


@section('style')


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .breadcrumb {
            background-color: transparent;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .room-image {
            height: 100%;
            object-fit: cover;
        }
        .btn-book {
            background-color: #28a745;
            color: #fff;
        }
        .btn-book:hover {
            background-color: #218838;
        }
    
        .guest-selector {
            position: relative;
            width: 100%;
        }

        .guest-dropdown {
            display: none;
            position: absolute;
            background: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 0px 0px 8px 8px;
            margin-top: -3px;
            padding: 10px;
            width: 100%;
            z-index: 10;
        }

        .guest-dropdown.open {
            display: block;
        }

        .guest-option {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0;
        }

        .guest-option span {
            font-size: 14px;
        }

        .guest-controls {
            display: flex;
            align-items: center;
        }

        .guest-controls button {
            border: 1px solid #ddd;
            background: #f8f9fa;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 16px;
        }

        .guest-controls button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .guest-controls input {
            width: 40px;
            text-align: center;
            border: none;
            background: none;
            font-size: 16px;
            margin: 0 10px;
        }
    </style>
</head>

@endsection

<!-- "bg-light" -->


@section('content')



  <!-- header start from hare .... -->
 @include('front.nav')

  <!-- header end from hare .... -->

 

  <div class="container mt-4">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="rooms.php">Rooms</a></li>
              
            </ol>
        </nav>
    </div>

   
    <div class="container mt-3">
        <div class="row">
           
            <div class="col-md-8">
                <div id="roomCarousel"  >
                     <div class="card shadow-sm">
                    <img src="{{ asset('assets/rooms/IMG_42663.png') }}" style="border-radius: 0.375rem;" class="card-img-top room-image" alt="Simple Room">
                    <!-- <div class="card-body"> -->
                        <!-- <h5 class="card-title">Simple Room</h5> -->
                        <!-- <p class="card-text text-muted">₹300 per night</p> -->
                    <!-- </div> -->
                </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3 class="mb-3">৳11245 per Month</h3>
                    <p class="text-warning mb-2">
                        ★★★★☆
                    </p>
                    
                    <form id="reservationForm" action="book.php" method="get">
                        <!-- Check-in and Check-out Dates -->
                        <div class="row">
                            
                        </div>

                        <!-- Guest Selector -->
                        <div class="form-group mt-2">
                          
                            <div class="guest-selector">
                                
                                <div class="guest-dropdown" id="guestDropdown">
                                    <div class="guest-option">
                                        <span>Adults <small>(Ages 13+)</small></span>
                                        <div class="guest-controls">
                                            <button type="button" id="adultMinus">-</button>
                                            <input type="text" name="adult" id="adultCount" value="1" readonly>
                                            <button type="button" id="adultPlus">+</button>
                                        </div>
                                    </div>
                                    <div class="guest-option">
                                        <span>Children <small>(Ages 2-12)</small></span>
                                        <div class="guest-controls">
                                            <button type="button" id="childMinus">-</button>
                                            <input type="text" name="children" id="childCount" value="0" readonly>
                                            <button type="button" id="childPlus">+</button>
                                        </div>
                                    </div>
                                    <div class="guest-option">
                                        <span>Infants <small>(Under 2)</small></span>
                                        <div class="guest-controls">
                                            <button type="button" id="infantMinus">-</button>
                                            <input type="text" name="infant" id="infantCount" value="0" readonly>
                                            <button type="button" id="infantPlus">+</button>
                                        </div>
                                    </div>
                                    <p class="text-muted">This place has a maximum of 2 children.</p>
                                    <button type="button" class="btn btn-secondary btn-sm" id="closeDropdown">Close</button>
                                </div>
                            </div>
                        </div>

                        <!-- Total Amount Display -->
                        <div id="totalAmount" class="mt-2">Total Amount: $0</div>

                        <!-- Submit Button -->
                        <button class="btn btn-book btn-lg w-100 mt-2" >Chat With House Owner</button>
                    </form>
                </div>
            </div>
         
            <div class="col-md-12 mt-3">
                <div class="card p-4">
                    <!-- <h3 class="mb-3">₹500 per night</h3>
                    <p class="text-warning mb-2">
                        ★★★★☆
                    </p> -->
                    <h5>Description</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse earum ab saepe ea sapiente possimus iste adipisci unde distinctio sit. Eveniet quasi optio aspernatur sit porro beatae eius, eos odio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aliquam culpa itaque ipsum sed reprehenderit vitae ab consectetur, neque velit obcaecati omnis aut perspiciatis repudiandae quam alias corrupti nihil voluptates. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, assumenda temporibus earum inventore repellendus adipisci? Quam, porro consequuntur recusandae sit distinctio excepturi quo iste nisi architecto nostrum animi soluta quae? Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro harum amet laboriosam doloremque veniam? Quaerat dolor delectus voluptate nesciunt, tempore odit soluta porro possimus omnis optio saepe, provident atque rem.  </p>
                    <p><strong>Features:</strong> bedroom, balcony, kitchen</p>
                    <p><strong>Facilities:</strong> Air conditioner, Room Heater, Geyser</p>
                    <p><strong>Guests:</strong> 3 Adults, 2 Children</p>
                    <p><strong>Area:</strong> 300 sq. ft.</p>
                    <!-- <button class="btn btn-book btn-lg w-100" >Book Now</button> -->
                </div>
            </div>
        </div>
    </div>

 @include('front.footer')

 @endsection

@push('js')

<script>
    document.getElementsByTagName('body').className = "bg-light"
        // const guestButton = document.getElementById('guestButton');
        // const guestDropdown = document.getElementById('guestDropdown');
        // const closeDropdown = document.getElementById('closeDropdown');

        // const adultMinus = document.getElementById('adultMinus');
        // const adultPlus = document.getElementById('adultPlus');
        // const adultCount = document.getElementById('adultCount');

        // const childMinus = document.getElementById('childMinus');
        // const childPlus = document.getElementById('childPlus');
        // const childCount = document.getElementById('childCount');

        // const infantMinus = document.getElementById('infantMinus');
        // const infantPlus = document.getElementById('infantPlus');
        // const infantCount = document.getElementById('infantCount');

        // const checkin = document.getElementById('checkin');
        // const checkout = document.getElementById('checkout');
        // const totalAmount = document.getElementById('totalAmount');

        // const PER_NIGHT_RATE = 50;

        // guestButton.addEventListener('click', () => {
        //     guestDropdown.classList.toggle('open');
        // });

        // closeDropdown.addEventListener('click', () => {
        //     guestDropdown.classList.remove('open');
        // });

        // adultMinus.addEventListener('click', () => {
        //     if (parseInt(adultCount.value) > 1) {
        //         adultCount.value = parseInt(adultCount.value) - 1;
        //         updateGuestButton();
        //     }
        // });

        // adultPlus.addEventListener('click', () => {
        //     if(parseInt(adultCount.value) < 2){
        //         adultCount.value = parseInt(adultCount.value) + 1;
        //         updateGuestButton();
        //     }
        // });

        // childMinus.addEventListener('click', () => {
        //     if (parseInt(childCount.value) > 0) {
        //         childCount.value = parseInt(childCount.value) - 1;
        //         updateGuestButton();
        //     }
        // });

        // childPlus.addEventListener('click', () => {
        //     if (parseInt(childCount.value) < 1) {
        //         childCount.value = parseInt(childCount.value) + 1;
        //         updateGuestButton();
        //     }
        // });

        // infantMinus.addEventListener('click', () => {
        //     if (parseInt(infantCount.value) > 0) {
        //         infantCount.value = parseInt(infantCount.value) - 1;
        //         updateGuestButton();
        //     }
        // });

        // infantPlus.addEventListener('click', () => {
        //     infantCount.value = parseInt(infantCount.value) + 1;
        //     updateGuestButton();
        // });

        // checkin.addEventListener('change', calculateTotal);
        // checkout.addEventListener('change', calculateTotal);

        // function updateGuestButton() {
        //     const totalGuests =
        //         parseInt(adultCount.value) +
        //         parseInt(childCount.value) +
        //         parseInt(infantCount.value);
        //     guestButton.textContent = `${totalGuests} Guest${totalGuests > 1 ? 's' : ''}`;
        // }

        // function calculateTotal() {
        //     const checkinDate = new Date(checkin.value);
        //     const checkoutDate = new Date(checkout.value);

        //     if (checkinDate && checkoutDate && checkoutDate > checkinDate) {
        //         const timeDifference = checkoutDate - checkinDate;
        //         const nights = timeDifference / (1000 * 60 * 60 * 24);
        //         const total = nights * PER_NIGHT_RATE;
        //         totalAmount.textContent = `Total Amount: $${total}`;
        //     } else {
        //         totalAmount.textContent = 'Total Amount: $0';
        //     }
        // }
    </script>



@endpush


 