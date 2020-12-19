@extends('layouts.dashboard')

@section('title', 'My Product Details')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Shirup Marzan</h2>
      <p class="dashboard-subtitle">Product Details</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Product Name</label>
                      <input type="text" class="form-control" id="name" name="storeName" value="Papel La Casa" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="number" class="form-control" id="price" name="price" value="200" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="category">Category</label>
                      <select name="category" id="category" class="form-control">
                        <option value="">Select Category</option>
                        <option value="">Furniture</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="desc">Description</label>
                      <textarea name="desc" id="" cols="30" rows="4" class="form-control">
The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge. Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning
                                </textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <button type="submit" class="btn btn-success btn-block px-5">Update Product</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="gallery-container">
                    <img src="{{ url('assets/images/products/product-1.jpg') }}" alt="" class="w-100" />
                    <a class="delete-gallery" href="#">
                      <img src="{{ asset('assets/images/icon-delete.svg') }}" alt="" />
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="gallery-container">
                    <img src="{{ url('assets/images/products/product-2.jpg') }}" alt="" class="w-100" />
                    <a class="delete-gallery" href="#">
                      <img src="{{ asset('assets/images/icon-delete.svg') }}" alt="" />
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="gallery-container">
                    <img src="{{ url('assets/images/products/product-3.jpg') }}" alt="" class="w-100" />
                    <a class="delete-gallery" href="#">
                      <img src="{{ asset('assets/images/icon-delete.svg') }}" alt="" />
                    </a>
                  </div>
                </div>
                <div class="col mt-3">
                  <input type="file" id="file" style="display: none" multiple />
                  <button class="btn btn-secondary btn-block" onclick="thisFileUpload();">Add Photo</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

<script>
  CKEDITOR.replace( 'desc' );

  function thisFileUpload() {
    document.getElementById("file").click();
  }
</script>
@endpush