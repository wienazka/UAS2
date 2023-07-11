@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Difficulties Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Difficulties</li>
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
            Difficulties Data
        </div>
        <div class="card-body">
            <form method="POST" action="/difficulties">
                @csrf
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">level </label>
                    <div class="col-sm-10">
                      <input type="text" id="exampleFormControlInput1" class="form-control" name="level">
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection