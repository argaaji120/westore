@extends('layouts.admin')

@section('title', 'User')

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">User</h2>
        <p class="dashboard-subtitle">Edit user</p>
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
                <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <small>Kosongkan jika tidak ingin mengubah password</small>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="roles">Role</label>
                        <select name="roles" id="roles" class="form-control" required>
                          <option value="USER" {{ $user->roles == 'USER' ? 'selected' : '' }}>User</option>
                          <option value="ADMIN" {{ $user->roles == 'ADMIN' ? 'selected' : '' }}>Admin</option>
                        </select>
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
