<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="{{ asset('public/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminKatalog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" 
         data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('/profil')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/kategoriberita')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/tag')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tag</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/penulis')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penulis</p>
                </a>
              </li>
            </ul>
          </li>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('/servicesatu')}}" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Service
              </p>
            </a>
            </li>
          <li class="nav-item">
            <a href="{{url('/konten')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Konten
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/berita')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/users')}}" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Pengaturan User
              </p>
            </a>
          </li> <li class="nav-item">
             <a onclick="event.preventDefault();    
             document.getElementById('logout').submit()" 
             class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i><p>
            Log Out</p>
            <form action="{{ url('/logout') }}" method="GET" 
            id="logout" class="display: none;">
            @csrf
            </form>
          </a>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

