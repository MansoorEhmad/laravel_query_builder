@extends('layouts.app-customer')
@section('title')
Update Student | Laravel Query Builder
@endsection
@section('content')
<div class="container">
    <div class="row mt-5">
    <p><a href="{{ route('get.students') }}">Students</a>/Student</p>
    <h3 class="mb-5 text-center">Update Student</h3>
        <form action="{{ route('upgrade.student', $data->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" value="{{ $data->name }}" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">E-Mail:</label>
                <input type="email" value="{{ $data->email }}" class="form-control" aria-describedby="emailHelp" name="email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>
@endsection