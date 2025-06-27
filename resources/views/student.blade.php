@extends('layouts.app-customer')
@section('title')
Single Student | Laravel Query Builder
@endsection
@section('content')
<div class="container">
    <div class="row mt-5">
       <p><a href="{{ route('get.students') }}">Students</a>/Student</p>
        <h3 class="mb-5 text-center">Student Details</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-Mail</th>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection