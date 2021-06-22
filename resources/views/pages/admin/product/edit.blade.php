@extends('layouts.admin')

@section('title', 'Product')

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Product</h2>
        <p class="dashboard-subtitle">Edit product</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-12">
            @if ($errors->any())
              <div class="alert alert-danger">
                <h5>Oops!</h5>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <div class="card">
              <div class="card-body">
                <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="owner">Owner</label>
                        <select name="users_id" id="owner" class="form-control">
                          <option value="" selected hidden>select user</option>
                          @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ $user->id == $product->users_id ? 'selected' : '' }}>{{ $user->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="category">Category</label>
                        <select name="categories_id" id="category" class="form-control">
                          <option value="" selected hidden>select category</option>
                          @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $product->categories_id ? 'selected' : '' }}>{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="number" name="description" id="description" cols="30" rows="10" required>{{ $product->description }}</textarea>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col text-right">
                      <button type="submit" class="btn btn-success px-5">Update</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('description');
  </script>
@endpush
