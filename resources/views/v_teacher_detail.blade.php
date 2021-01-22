@extends('layout.v_template')

@section('title', 'Teacher Detail')

@section('content')

<table class="table">
    <tr>
        <th width="10px">Id</th>
        <th width="10px">:</th>
        <th>{{ $teacher->id }}</th>
    </tr>
    <tr>
        <th width="10px">NIP</th>
        <th width="10px">:</th>
        <th>{{ $teacher->nip }}</th>
    </tr>
    <tr>
        <th width="10px">Name</th>
        <th width="10px">:</th>
        <th>{{ $teacher->name }}</th>
    </tr>
    <tr>
        <th width="10px">Subject</th>
        <th width="10px">:</th>
        <th>{{ $teacher->subject }}</th>
    </tr>
    <tr>
        <th width="10px">Gender</th>
        <th width="10px">:</th>
        <th>{{ $teacher->gender }}</th>
    </tr>
    <tr>
        <th width="10px">Photo</th>
        <th width="10px">:</th>
        <th><img src="{{ url('photo/' . $teacher->photo) }}" width="200px"></th>
    </tr>
    <tr>
        <th>
            <a href="/teacher" class="btn btn-success btn-sm">Back</a>
        </th>
    </tr>
</table>

@endsection