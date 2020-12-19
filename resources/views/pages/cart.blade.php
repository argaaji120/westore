@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
<div class="page-content page-cart">
  <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="store-cart">
    <div class="container">
      <!-- Product List -->
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-10 table-responsive">
          <table class="table table-borderless table-cart">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name & Seller</th>
                <th>Price</th>
                <th>Menu</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="width: 35%">
                  <div class="cart-thumbnail">
                    <div class="cart-image"
                      style="background-image: url('{{ url('assets/images/products/product-details-1.jpg') }}')">
                    </div>
                  </div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">Sofa Ternyaman</div>
                  <div class="product-subtitle">by Arga Aji</div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">$29,112</div>
                  <div class="product-subtitle">USD</div>
                </td>
                <td style="width: 30%">
                  <a class="btn btn-remove-cart" href="#">Remove</a>
                </td>
              </tr>
              <tr>
                <td style="width: 35%">
                  <div class="cart-thumbnail">
                    <div class="cart-image"
                      style="background-image: url('{{ url('assets/images/products/product-details-2.jpg') }}')">
                    </div>
                  </div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">Sofa Ternyaman</div>
                  <div class="product-subtitle">by Arga Aji</div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">$29,112</div>
                  <div class="product-subtitle">USD</div>
                </td>
                <td style="width: 30%">
                  <a class="btn btn-remove-cart" href="#">Remove</a>
                </td>
              </tr>
              <tr>
                <td style="width: 35%">
                  <div class="cart-thumbnail">
                    <div class="cart-image"
                      style="background-image: url('{{ url('assets/images/products/product-details-3.jpg') }}')">
                    </div>
                  </div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">Sofa Ternyaman</div>
                  <div class="product-subtitle">by Arga Aji</div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">$29,112</div>
                  <div class="product-subtitle">USD</div>
                </td>
                <td style="width: 30%">
                  <a class="btn btn-remove-cart" href="#">Remove</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Shipping Detail -->
      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-10">
          <hr />
        </div>
        <div class="col-10">
          <h2 class="mb-4">Shipping Details</h2>
        </div>
      </div>
      <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
        <div class="col-md-5">
          <div class="form-group">
            <label for="addressOne">Address 1</label>
            <input type="text" class="form-control" id="addressOne" name="addressOne" />
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label for="addressTwo">Address 2</label>
            <input type="text" class="form-control" id="addressTwo" name="addressTwo" />
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="province">Province</label>
            <select class="form-control" name="province" id="province">
              <option value="">Central Java</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="city">City</label>
            <select class="form-control" name="city" id="city">
              <option value="">Semarang</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="postalCode">Postal Code</label>
            <input type="text" class="form-control" id="postalCode" name="postalCode" />
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country" />
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" />
          </div>
        </div>
      </div>

      <!-- Payment Information -->
      <div class="row" data-aos="fade-up" data-aos-delay="250">
        <div class="col-10">
          <hr />
        </div>
        <div class="col-10">
          <h2 class="mb-2">Payment Informations</h2>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="300">
        <div class="col-4 col-md-2">
          <div class="product-title">$10</div>
          <div class="product-subtitle">Country Tax</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title">$280</div>
          <div class="product-subtitle">Product Insurance</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title">$580</div>
          <div class="product-subtitle">Ship to Jakarta</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title text-success">$392,409</div>
          <div class="product-subtitle">Total</div>
        </div>
        <div class="col-8 col-md-2">
          <a class="btn btn-success btn-block mt-4 px-4" href="{{ route('succcess') }}">Checkout</a>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection