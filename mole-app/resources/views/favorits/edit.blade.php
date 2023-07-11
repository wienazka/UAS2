@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Favorit Heroes Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Favorit Heroes</li>
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
            Favorit Heroes Data
        </div>
        <div class="card-body">
            <form method="POST" action="/favorits/{{ $favorit->id }}">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">User </label>
                    <div class="col-sm-10">
                        <select id="user" class="form-select" aria-label="Default select example" name="user_id">
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ $user->id == $favorit->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Heroes </label>
                    <div class="col-sm-10">
                        <select id="hero" class="form-select" aria-label="Default select example" name="hero_id">
                            @foreach ($heroes as $hero)
                            <option value="{{ $hero->id }}" {{ $hero->id == $favorit->hero_id ? 'selected' : '' }}>{{ $hero->name }}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                          <input type="date" id="exampleFormControlInput1" class="form-control" name="date" value="{{ $favorit->date }}">
                        </div>
                      </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Notes</label>
                        <div class="col-sm-10">
                          <input type="text" id="exampleFormControlInput1" class="form-control" name="notes" value="{{ $favorit->notes }}">
                        </div>
                      </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Rating</label>
                        <div class="col-sm-10">
                          <input type="text" id="exampleFormControlInput1" class="form-control" name="rating" value="{{ $favorit->rating    }}">
                        </div>
                      </div>
                <button type="submit" class="btn btn-primary">add +</button>
            </form>
        </div>
    </div>
@endsection