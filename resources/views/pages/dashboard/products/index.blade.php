@extends('layouts.dashboard')

@section('title', 'My Products')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">My Product</h2>
      <p class="dashboard-subtitle">Manage it well and get money</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <a href="{{ route('products.create') }}" class="btn btn-success">Add New Products</a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a class="card card-dashboard-product d-block" href="{{ route('products.show', 1) }}">
            <div class="card-body">
              <img src="{{ url('assets/images/products/product-1.jpg') }}" alt="" class="w-100 mb-2" />
              <div class="product-title">Shirup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a class="card card-dashboard-product d-block" href="{{ route('products.show', 1) }}">
            <div class="card-body">
              <img src="{{ url('assets/images/products/product-2.jpg') }}" alt="" class="w-100 mb-2" />
              <div class="product-title">Shirup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a class="card card-dashboard-product d-block" href="{{ route('products.show', 1) }}">
            <div class="card-body">
              <img src="{{ url('assets/images/products/product-3.jpg') }}" alt="" class="w-100 mb-2" />
              <div class="product-title">Shirup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a class="card card-dashboard-product d-block" href="{{ route('products.show', 1) }}">
            <div class="card-body">
              <img src="{{ url('assets/images/products/product-4.jpg') }}" alt="" class="w-100 mb-2" />
              <div class="product-title">Shirup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a class="card card-dashboard-product d-block" href="{{ route('products.show', 1) }}">
            <div class="card-body">
              <img src="{{ url('assets/images/products/product-5.jpg') }}" alt="" class="w-100 mb-2" />
              <div class="product-title">Shirup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection