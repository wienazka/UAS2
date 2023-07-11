@extends('layouts.main')

@section('content')
    <h1 class="mt-4">User Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">User</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            User Data
        </div>
        <div class="card-body">
            <form method="POST" action="/users">
                @csrf
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Name </label>
                    <div class="col-sm-10">
                      <input type="text" id="exampleFormControlInput1" class="form-control" name="name">
                    </div>
                  </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Email </label>
                    <div class="col-sm-10">
                      <input type="text" id="exampleFormControlInput1" class="form-control" name="email">
                    </div>
                  </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Password </label>
                    <div class="col-sm-10">
                      <input type="password" id="exampleFormControlInput1" class="form-control" name="password">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                    <select id="role" class="form-control" name="role" required>
                        <option value="" selected disabled>-- Select one --</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                </div>
                  <input type="submit" value="add +" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection