<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Westore - @yield('title', 'Admin')</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="{{ asset('assets/style/main.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.css" />
  @stack('style')
</head>

<body>
  <div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">
      <!-- Sidebar -->
      <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
          <img src="{{ asset('assets/images/dashboard-store-logo.svg') }}" alt="" class="my-4" />
        </div>
        <div class="list-group list-group-flush">
          <a href="{{ route('admin.dashboard') }}"
            class="list-group-item list-group-item-action{{ request()->is('admin/dashboard') ? ' active' : '' }}">
            Dashboard
          </a>
          <a href="{{ route('user.index') }}"
            class="list-group-item list-group-item-action{{ request()->is('admin/user*') ? ' active' : '' }}">
            Users
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            Products
          </a>
          <a href="{{ route('category.index') }}"
            class="list-group-item list-group-item-action{{ request()->is('admin/category*') ? ' active' : '' }}">
            Categories
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            Transactions
          </a>
        </div>
      </div>

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
          <div class="container-fluid">
            <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">&laquo; Menu</button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Desktop Menu -->
              <ul class="navbar-nav d-none d-lg-flex ml-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link" href="" id="navbarDropdown" role="button" data-toggle="dropdown">
                    <img src="{{ url('assets/images/avatar.png') }}" alt="" class="rounder-circle mr-2 profile-picture" />
                    Hi, Arga Aji
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                  </div>
                </li>
              </ul>

              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                  <a class="nav-link d-inline-block" href="{{ route('logout') }}">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- Section Content -->
        @yield('content')

      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();

    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script src="{{ asset('assets/script/navbar-scroll.js') }}"></script>
  @stack('script')
</body>

</html>
