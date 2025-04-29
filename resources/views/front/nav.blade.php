<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">To Lete</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link me-2 " href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="{{ route('houses.index',['type' => "family"]) }}">Familly Houses</a>
          </li>
          <li class="nav-item">
            <div class="btn-group">
                  <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Single Houses
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('houses.index',['type' => 'boys']) }}">Boys</a></li>
                    <li><a class="dropdown-item" href="{{ route('houses.index', ['type'=> 'girls']) }}">Girls</a></li>
                  </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="{{ route('contactUs') }}">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('aboutUs') }}">About</a>
          </li>
        </ul>
        <div class="d-flex">
             

        @if(auth()->user())
          @if(auth()->user()->role == "user")
    
           <!-- <button class=""></button> -->
           <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
           Give Rental
          </button>
          @elseif(auth()->user()->role == 'owner')
            <a href="{{ route('profile') }}"  class="btn btn-outline-dark shadow-none me-lg-3 me-2">Profile</a>  
          @endif
                
          <a href="{{ route('logout') }}" class="btn btn-outline-dark shadow-none">Logout</a>
        @else
          <a href="{{ route('login') }}"  class="btn btn-outline-dark shadow-none me-lg-3 me-2">Login</a>    
          <a href="{{ route('register') }}" class="btn btn-outline-dark shadow-none">Register</a>

        @endif
                     
           
        </div>
        
      </div>
    </div>
  </nav>
