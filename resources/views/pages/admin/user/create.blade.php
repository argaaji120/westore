@extends('layouts.admin')

@section('title', 'User')

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">User</h2>
        <p class="dashboard-subtitle">Create a new user</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-12">
            @if ($errors->any())
              <div class="alert alert-danger">
                <h5 class="text-danger">Oops!</h5>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <div class="card">
              <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="roles">Role</label>
                        <select name="roles" id="roles" class="form-control" required>
                          <option value="" selected hidden>select role</option>
                          <option value="USER" {{ old('role') == 'USER' ? ' selected' : '' }}>User</option>
                          <option value="ADMIN" {{ old('role') == 'ADMIN' ? ' selected' : '' }}>Admin</option>
                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col text-right">
                      <button type="submit" class="btn btn-success px-5">Save</button>
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
