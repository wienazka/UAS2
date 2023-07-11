@extends('layouts.main')

@section('content')
    
<h1 class="mt-4">Heroes Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Heroes</li>
    </ol>
    
    <a href="/heroes/create">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Heroes Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Poster</th>
                    <th>Weapon</th>
                    <th>Role</th>
                    <th>Specialty</th>
                    <th>Difficulty</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Poster</th>
                    <th>Weapon</th>
                    <th>Role</th>
                    <th>Specialty</th>
                    <th>Difficulty</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($heroes as $hero)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $hero->name }}</td>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="/assets/img/{{ $hero->poster }}" alt="" style="width: 50px; heighpt:50px; border-radius:50px;">
                        </div>
                    </td>
                    <td>{{ $hero->weapon }}</td>
                    <td>{{ $hero->role->name }}</td>
                    <td>{{ $hero->special->name }}</td>
                    <td>{{ $hero->difficult->level }}</td>
                    <td><p style="text-align: justify">{{ $hero->description }}</p></td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="/heroes/{{$hero->id}}/edit" class="btn btn-warning" style="margin-right:3px;"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a>
                            <a href="/heroes/{{$hero->id}}" class="btn btn-danger" data-confirm-delete="true"><i class="fa-regular fa-trash-can" style="color: #ffffff;"></i></a>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection