<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="index.html">Admin Dashboard</a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>


  <!-- Navbar -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="">Hello! {{ Auth::user()->name }}</a>
        <a class="dropdown-item" href="{{ url('/') }}" target="_blank"><i class="fas fa-share-square"></i> Visit Site</a>
        <a class="dropdown-item" href="{{ url('admin/user/'.Auth::user()->id) }}"><i class="fas fa-user"></i> Profile</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-power-off"></i> Logout</a>
      </div>
    </li>
  </ul>

</nav>
