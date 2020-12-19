<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img class="" src="{{ asset('assets/images/logo.svg') }}" alt="logo" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarStore">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarStore">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item{{ request()->is('categories') ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('categories') }}">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Rewards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success nav-link px-4 text-white" href="{{ route('register') }}">Sign In</a>
        </li>
      </ul>
    </div>
  </div>
</nav>