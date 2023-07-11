@extends('layouts.main')

@section('content')
    
<h1 class="mt-4">Specialties Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Specialties</li>
    </ol>
    <a href="/specialties/create">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Specialties Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Specialties</th>
                    <th>Decription</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Specialties</th>
                    <th>Decription</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($specials as $special)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $special->name }}</td>
                    <td>{{ $special->description }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="/specialties/{{$special->id}}/edit" class="btn btn-warning" style="margin-right:3px;"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a>
                            <a href="/specialties/{{$special->id}}" class="btn btn-danger" data-confirm-delete="true"><i class="fa-regular fa-trash-can" style="color: #ffffff;"></i></a>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection