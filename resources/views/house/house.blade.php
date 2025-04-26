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
                <div id="roomCarousel">
                    <div class="card shadow-sm">
                        <img src="{{ asset('assets/rooms/IMG_42663.png') }}" style="border-radius: 0.375rem;"
                            class="card-img-top room-image" alt="Simple Room">
                        <!-- <div class="card-body"> -->
                        <!-- <h5 class="card-title">Simple Room</h5> -->
                        <!-- <p class="card-text text-muted">₹300 per night</p> -->
                        <!-- </div> -->
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4">
                    <h3 class="mb-3">৳{{ $house->price }} per Month</h3>
                    <p class="text-warning mb-2">
                        Available From :
                    </p>
                    <p>
                        {{ date('jS M, Y', strtotime($house->availableFrom)) }}
                    </p>


                    <button class="btn btn-book btn-lg w-100 mt-2">
                        Bellow Message To House Owener
                    </button>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <div class="card p-4">

                    <h5>Description</h5>
                    <p>{{ $house->description }}</p>
                    <p><strong>Features:</strong>
                        {{ $house->numberOfRooms . " Rooms, " . $house->numberOfBathRooms . " Bath Rooms, " . $house->numberOfBalcony . " Balcony, " }}
                    </p>
                    <p><strong>Facilities:</strong>
                        {{ $house->internate ? "Wify," : ""}}
                        {{ $house->gas ? "Gas," : "" }}
                        {{ $house->left ? "Left," : "" }}
                        {{ $house->parking ? "parking" : "" }}
                    </p>
                    <p><strong>Location:</strong>

                        {{ ucfirst($house->area) }},
                        {{ ucfirst($house->thana) }},
                        {{ ucfirst($house->district) }},
                        {{ ucfirst($house->division) }},

                    </p>


                    <p><strong>House Owener:</strong> {{ $house->user->profile->phone }}</p>
                    <!-- <button class="btn btn-book btn-lg w-100" >Book Now</button> -->
                </div>
            </div>

            <div class="row mt-5">
                <div class="card">
                    <div class="card-header">
                        @auth
                        <form action="{{ route('chateHouse', ['id' => $house->id]) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="">
                                        <textarea name="message" placeholder="Chat with house owener"
                                            class="form-control @error('message') is-invalid @enderror"
                                            id="">{{ old('message') }}</textarea>

                                        @error('message')
                                            <div class="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <input type="submit" value="submit" class="btn btn-primary mt-1">
                                    </div>
                                </div>

                            </div>
                        </form>
                        @else
                            <p>You Need To Logged In To Message</p>
                        @endauth
                    </div>
                    <div class="card-body">
                       
                        @forelse($chats as $chat)
                            <div class="card p-3 my-3">
                                <p>{{ $chat->user->email }}</p>
                                <small>{{ $chat->message }}</small>
                                @auth
                                    @if(auth()->user()->id == $chat->user->id)
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('deleteChat',['id' => $house->id,'chatId'=>$chat->id]) }}" class="btn btn-danger">Delete Chat</a>
                                    </div>
                                    @endif
                                @endauth
                                
                            </div>
                        @empty
                            <p>there is no chats</p>
                        @endforelse
                    </div>
                </div>
            </div>




        </div>
    </div>

    @include('front.footer')

@endsection

@push('js')

    <script>
        document.getElementsByTagName('body').className = "bg-light"


    </script>



@endpush