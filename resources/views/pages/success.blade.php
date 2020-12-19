@extends('layouts.success')

@section('title', 'Checkout Success')

@section('content')
<div class="page-content page-success">
  <div class="section-success" data-aos="zoom-in">
    <div class="container">
      <div class="row align-items-center justify-content-center row-login">
        <div class="col-lg-6 text-center">
          <img class="mb-4" src="{{ asset('assets/images/success.svg') }}" alt="" />
          <h2>Transaction Processed!</h2>
          <p>
            Silahkan tunggu konfirmasi email dari kami dan <br />
            kami akan menginformasikan resi secept mungkin!
          </p>
          <div>
            <a class="btn btn-success w-50 mt-4" href="{{ route('dashboard') }}">My Dashboard</a>
            <a class="btn btn-signup w-50 mt-3" href="{{ route('home') }}">Go to Shopping</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection