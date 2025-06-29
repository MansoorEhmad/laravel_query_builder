@extends('layouts.app-customer')
@section('title')
All Students | Laravel Query Builder
@endsection
@section('content')
<div class="container">
    <h3 class="mt-5 mb-3 text-center">All Students</h3>
    <a href="{{ route('page.add.student') }}" class="btn btn-success">Add New</a>
    <div class="row mt-3">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $serial = 0;
                @endphp
                @foreach($data as $d)
                @php
                $serial++;
                @endphp
                <tr>
                    <td>{{ $serial }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->email }}</td>
                    <td><a href="{{ url('/student') }}/{{$d->id}}" class="btn btn-success"><i class="fa-brands fa-readme"></i></a>
                        <a href="{{ route('page.update.student', $d->id) }}" class="btn btn-primary"><i class="fa fa-pen-to-square"></i></a>
                        <a href="{{ route('delete.student', $d->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-5">
             
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection