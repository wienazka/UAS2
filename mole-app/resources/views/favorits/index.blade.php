@extends('layouts.main')

@section('content')
    
<h1 class="mt-4">Favorits Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Favorits</li>
    </ol>
    <a href="/favorits/create">
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
                    <th>User</th>
                    <th>Hero</th>
                    <th>date</th>
                    <th>notes</th>
                    <th>rating</th>
                    <th>action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Hero</th>
                    <th>date</th>
                    <th>notes</th>
                    <th>rating</th>
                    <th>action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($favorits as $favorit)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $favorit->user->name }}</td>
                    <td>{{ $favorit->hero->name }}</td>
                    <td>{{ $favorit->date }}</td>
                    <td>{{ $favorit->notes }}</td>
                    <td>{{ $favorit->rating }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="/favorits/{{ $favorit->id }}/edit" class="btn btn-warning" style="margin-right:3px;"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a>
                            <a href="/favorits/{{$favorit->id}}" class="btn btn-danger" data-confirm-delete="true"><i class="fa-regular fa-trash-can" style="color: #ffffff;"></i></a>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection