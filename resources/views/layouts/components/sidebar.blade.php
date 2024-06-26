<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="{{ asset('img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">SmartChicken</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white @if (url()->current() == url('/')) active bg-gradient-primary @endif" href="{{ url('') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>

      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Config Menu</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white @if (url()->current() == url('/heater')) active bg-gradient-primary @endif" href="{{ url('/heater') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Heater</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white @if (url()->current() == url('/lamp')) active bg-gradient-primary @endif" href="{{ url('/lamp') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
          </div>
          <span class="nav-link-text ms-1">Lamp</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Config Menu</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white @if (url()->current() == url('/device')) active bg-gradient-primary @endif" href="{{ url('/device') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">view_in_ar</i>
          </div>
          <span class="nav-link-text ms-1">Manage Device</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white @if (url()->current() == url('/users')) active bg-gradient-primary @endif" href="{{ url('/users') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
          </div>
          <span class="nav-link-text ms-1">Manage User</span>
        </a>
      </li>
    </ul>
  </div>
    </div>
</aside>