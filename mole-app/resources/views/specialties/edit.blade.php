@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Specialties Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Specialties</li>
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
            Specialties Data
        </div>
        <div class="card-body">
            <form method="POST" action="/specialties/{{$specialty->id}}">
                @csrf
                @method('put')
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">name </label>
                    <div class="col-sm-10">
                      <input type="text" id="exampleFormControlInput1" class="form-control" name="name" value="{{$specialty->name }}">
                    </div>
                  </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Description </label>
                    <div class="col-sm-10">
                      <input type="text" id="exampleFormControlInput1" class="form-control" name="description" value="{{$specialty->description }}">
                    </div>
                  </div>
                <input type="submit" value="Update Specialties" class="btn btn-primary"></input>
            </form>
        </div>
    </div>
@endsection