@extends('layouts.app')

@section('title', 'Category Page')

@section('content')
  <div class="page-content page-home">
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h5>All Categories</h5>
          </div>
        </div>
        <div class="row">
          @php
            $delay_category = 0;
          @endphp
          @forelse ($categories as $category)
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $delay_category += 100 }}">
              <a class="component-categories d-block" href="{{ route('categories.detail', $category->slug) }}">
                <div class="categories-image">
                  <img src="{{ Storage::url($category->photo) }}" alt="{{ $category->name }}" class="w-100" />
                </div>
                <p class="categories-text">{{ $category->name }}</p>
              </a>
            </div>
          @empty
            <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">No Category Found</div>
          @endforelse
        </div>
      </div>
    </section>

    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Products</h5>
          </div>
        </div>
        <div class="row">
          @php
            $delay_product = 0;
          @endphp
          @forelse ($products as $product)
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $delay_product += 100 }}">
              <a class="component-products d-block" href="{{ route('details', $product->slug) }}">
                <div class="products-thumbnail">
                  @if ($product->galleries->count())
                    <div class="products-image" style="background-image: url('{{ Storage::url($product->galleries->first()->images) }}')"></div>
                  @else
                    <div class="products-image" style="background-color: #eee"></div>
                  @endif
                </div>
                <div class="products-text">{{ $product->name }}</div>
                <div class="products-price">${{ $product->price }}</div>
              </a>
            </div>
          @empty
            <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">No Product Found</div>
          @endforelse
        </div>
        <div class="row">
          <div class="col-12 mt-4 d-flex justify-content-center">
            {{ $products->links() }}
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
