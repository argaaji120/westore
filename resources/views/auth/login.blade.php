@extends('layouts.auth')

@section('content')
<div class="page-content page-auth">
  <div class="section-store-auth" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center row-login">
        <div class="col-lg-6 text-center">
          <img class="w-50 mb-4 mb-lg-none" src="{{ asset('assets/images/login-placeholder.png') }}" alt="" />
        </div>
        <div class="col-lg-5">
          <h2>Belanja kebutuhan utama,<br />menjadi lebih mudah</h2>
          <form class="mt-3" action="">
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" name="email" id="email" class="form-control w-75" />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control w-75" />
            </div>
            <a href="{{ route('home') }}" class="btn btn-success btn-block w-75 mt-4">Sign In to My Account</a>
            <a href="{{ route('register') }}" class="btn btn-signup btn-block w-75 mt-3">Sign Up</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection