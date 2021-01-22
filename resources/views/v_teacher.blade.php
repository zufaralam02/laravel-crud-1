@extends('layout.v_template')

@section('title', 'Teacher')

@section('content')

<a href="/teacher/add" class="btn btn-primary btn-sm">Add</a>

<br>

@if (session('message'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success</h4>
    {{ session('message') }}
</div>
@endif

<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>NIP</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Gender</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <!-- <?php $no = 1; ?> -->
        @foreach ($teacher as $t)
        <tr>
            <!-- <td>{{ $no++ }}</td> -->
            <td>{{ $t->id }}</td>
            <td>{{ $t->nip }}</td>
            <td>{{ $t->name }}</td>
            <td>{{ $t->subject }}</td>
            <td>{{ $t->gender }}</td>
            <td><img src="{{ url('photo/' . $t->photo) }}" width="40px"></td>
            <td>
                <a href="/teacher/detail/{{ $t->id }}" class="btn btn-sm btn-success">Detail</a>
                <a href="" class="btn btn-sm btn-warning">Update</a>
                <a href="" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection