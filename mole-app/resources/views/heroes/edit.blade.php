@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Heroes Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Heroes</li>
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
            Heroes Data
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" method="POST" action="/heroes/{{ $hero->id }}">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">name </label>
                    <div class="col-sm-10">
                    <input type="text" id="exampleFormControlInput1" class="form-control" name="name" value="{{ $hero->name }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Poster </label>
                    <div class="col-sm-10">
                        <img src="/assets/img/{{ $hero->poster }}" alt="" style="width: 200px; margin-bottom:20px;">
                        <input type="file" id="exampleFormControlInput1" class="form-control" name="poster" value="/assets/img/{{ $hero->poster }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Weapon </label>
                    <div class="col-sm-10">
                    <input type="text" id="exampleFormControlInput1" class="form-control" name="weapon" value="{{ $hero->weapon }}">
                    </div>
                </div>
                    <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                    <select id="role" class="form-select" aria-label="Default select example" name="role_id">
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}" {{ $role->id == $hero->role_id ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                    <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Specialty </label>
                    <div class="col-sm-10">
                    <select id="special" class="form-select" aria-label="Default select example" name="special_id">
                        @foreach ($specialties as $special)
                        <option value="{{ $special->id }}" {{ $special->id == $hero->special_id ? 'selected' : '' }}>{{ $special->name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                    <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Difficulty </label>
                    <div class="col-sm-10">
                    <select id="difficult" class="form-select" aria-label="Default select example" name="difficult_id">
                        @foreach ($difficulties as $difficult)
                        <option value="{{ $difficult->id }}" {{ $difficult->id == $hero->difficult_id ? 'selected' : '' }}>{{ $difficult->level }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                        <input type="text" id="exampleFormControlInput1" class="form-control" name="description" value="{{ $hero->description }}">
                        </div>
                    </div>
                    <input type="submit" value="Update Heroes" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection