@extends('layouts.app')

@section('content')
<div class="page-content page-home">
  <section class="store-carousel">
    <div class="container">
      <div class="row">
        <div class="col-md-12" data-aos="zoom-in">
          <div id="storeCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
              <li data-target="#storeCarousel" data-slide-to="1"></li>
              <li data-target="#storeCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/images/banner/banner-2.jpg') }}" alt="banner" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/images/banner/banner-3.jpg') }}" alt="banner" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/images/banner/banner-4.jpg') }}" alt="banner" class="d-block w-100" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="store-trend-categories">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>Trend Categories</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="{{ url('assets/images/categories/categories-1.svg') }}" alt="Gadgets Categories"
                class="w-100" />
            </div>
            <p class="categories-text">Gadgets</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="{{ url('assets/images/categories/categories-2.svg') }}" alt="Furniture Categories"
                class="w-100" />
            </div>
            <p class="categories-text">Furniture</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="{{ url('assets/images/categories/categories-3.svg') }}" alt="Make Up Categories"
                class="w-100" />
            </div>
            <p class="categories-text">Make Up</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="{{ url('assets/images/categories/categories-4.svg') }}" alt="Sneaker Categories"
                class="w-100" />
            </div>
            <p class="categories-text">Sneaker</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="{{ url('assets/images/categories/categories-5.svg') }}" alt="Tools Categories" class="w-100" />
            </div>
            <p class="categories-text">Tools</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="{{ url('assets/images/categories/categories-6.svg') }}" alt="Baby Categories" class="w-100" />
            </div>
            <p class="categories-text">Baby</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="store-new-products">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>New Products</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <a class="component-products d-block" href="{{ route('details') }}">
            <div class="products-thumbnail">
              <div class="products-image"
                style="background-image: url('{{ url('assets/images/products/product-1.jpg') }}')"></div>
            </div>
            <div class="products-text">Apple Watch 4</div>
            <div class="products-price">$890</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a class="component-products d-block" href="{{ route('details') }}">
            <div class="products-thumbnail">
              <div class="products-image"
                style="background-image: url('{{ url('assets/images/products/product-2.jpg') }}')"></div>
            </div>
            <div class="products-text">Orange Bogotta</div>
            <div class="products-price">$94,509</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <a class="component-products d-block" href="{{ route('details') }}">
            <div class="products-thumbnail">
              <div class="products-image"
                style="background-image: url('{{ url('assets/images/products/product-3.jpg') }}')"></div>
            </div>
            <div class="products-text">Sofa Ternyaman</div>
            <div class="products-price">$1,409</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <a class="component-products d-block" href="{{ route('details') }}">
            <div class="products-thumbnail">
              <div class="products-image"
                style="background-image: url('{{ url('assets/images/products/product-4.jpg') }}')"></div>
            </div>
            <div class="products-text">Bubuk Maketti</div>
            <div class="products-price">$225</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <a class="component-products d-block" href="{{ route('details') }}">
            <div class="products-thumbnail">
              <div class="products-image"
                style="background-image: url('{{ url('assets/images/products/product-5.jpg') }}')"></div>
            </div>
            <div class="products-text">Tatakan Gelas</div>
            <div class="products-price">$45,184</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <a class="component-products d-block" href="{{ route('details') }}">
            <div class="products-thumbnail">
              <div class="products-image"
                style="background-image: url('{{ url('assets/images/products/product-6.jpg') }}')"></div>
            </div>
            <div class="products-text">Mavic Kawe</div>
            <div class="products-price">$503</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
          <a class="component-products d-block" href="{{ route('details') }}">
            <div class="products-thumbnail">
              <div class="products-image"
                style="background-image: url('{{ url('assets/images/products/product-7.jpg') }}')"></div>
            </div>
            <div class="products-text">Black Edition Nike</div>
            <div class="products-price">$70,482</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
          <a class="component-products d-block" href="{{ route('details') }}">
            <div class="products-thumbnail">
              <div class="products-image"
                style="background-image: url('{{ url('assets/images/products/product-8.jpg') }}')"></div>
            </div>
            <div class="products-text">Monkey Toys</div>
            <div class="products-price">$783</div>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection