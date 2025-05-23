<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('school/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">To-Lete</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @if(auth()->user()->img)
              <img src="{{ asset('storage')."/".auth()->user()->img }}" class="img-circle elevation-2" alt="User Image">

            @else
            <img src="{{ asset('assets/img/profile.png') }}" class="img-circle elevation-2" alt="Image set Nai">

            @endif
                       
        </div>
        <div class="info">
          <a href="{{ route('profile') }}" class="d-block">{{ auth()->user()->email }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item">
                <a href="/profile" class="nav-link">
                <i class="fa-solid fa-address-card"></i>
                  <p>Profile</p>
                </a>
              </li>
             
              @if(auth()->user()->role == 'admin')
                <li class="nav-item">
                <a href="{{ route('admin.pannel') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Admin</p>
                </a>
              </li>
              @endif
           
              @if(auth()->user()->role == 'student')
              <li class="nav-item">
                <a href="{{ route('profile.feedback' ) }}" class="nav-link">
                <i class="fa-solid fa-comments-dollar"></i>
                  <p>Feedback</p>
                </a>
              </li>
              

              @endif

              <li class="nav-item">
                <a href="{{ route('profile.house') }}" class="nav-link">
                <i class="fa-solid fa-question"></i>
                  <p>House</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('profile.house.create') }}" class="nav-link">
                <i class="fa-solid fa-question"></i>
                  <p>Create House</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fa-solid fa-message"></i>
                  <p>Feed Back</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  <p>Logout</p>
                </a>
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
