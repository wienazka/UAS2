@extends('layouts.main')

@section('content')
    
<h1 class="mt-4">Difficulties Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Difficulties</li>
    </ol>
    <a href="/difficulties/create">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Difficulties Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Difficulties</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Difficulties</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($difficulties as $difficult)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $difficult->level }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="/difficulties/{{ $difficult->id }}/edit" class="btn btn-warning" style="margin-right:3px;"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a>
                            <a href="/difficulties/{{$difficult->id}}" class="btn btn-danger" data-confirm-delete="true"><i class="fa-regular fa-trash-can" style="color: #ffffff;"></i></a>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection