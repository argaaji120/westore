@extends('layouts.admin')

@section('title', 'Product Gallery')

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Product Gallery</h2>
        <p class="dashboard-subtitle">This is a list of product gallery</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('gallery-product.create') }}" class="btn btn-primary btn-sm mb-1">
                  Create new product gallery
                </a>
                <hr>
                <div class="table-responsive">
                  <table class="table table-sm table-bordered table-hover scroll-horizontal-vertical w-100" id="crudTable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
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
  <script>
    let datatable = $('#crudTable').DataTable({
      processing: true,
      serverSide: true,
      ordering: true,
      ajax: {
        url: '{!! url()->current() !!}'
      },
      columns: [{
          data: 'id',
          name: 'id'
        },
        {
          data: 'product.name',
          name: 'product.name'
        },
        {
          data: 'images',
          name: 'images'
        },
        {
          data: 'action',
          name: 'action',
          orderable: false,
          searchable: false,
          width: '15%'
        }
      ]
    })
  </script>
@endpush
