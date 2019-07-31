<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="{{ url('/admin/dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('department.index') }}">
      <i class="fas fa-synagogue"></i>
      <span>Departments</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('tender.index') }}">
      <i class="fas fa-paste"></i>
      <span>Tenders</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-award"></i>
      <span>Award of Tenders</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="far fa-building"></i>
      <span>Company</span></a>
  </li>
</ul>
