<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="{{ url('/admin/dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('view.categories') }}">
      <i class="fas fa-clipboard-list"></i>
      <span>Categories</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('view.tenders') }}">
      <i class="fas fa-paste"></i>
      <span>Tenders</span></a>
  </li>
</ul>
