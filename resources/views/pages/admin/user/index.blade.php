@extends('layouts.admin')

@section('title', 'User')

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">User</h2>
        <p class="dashboard-subtitle">This is a list of user</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm mb-1">
                  Create new user
                </a>
                <hr>
                <div class="table-responsive">
                  <table class="table table-sm table-bordered table-hover scroll-horizontal-vertical w-100" id="crudTable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
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
          data: 'name',
          name: 'name'
        },
        {
          data: 'email',
          name: 'email'
        },
        {
          data: 'roles',
          name: 'roles'
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
