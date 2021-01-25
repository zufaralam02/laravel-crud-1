@extends('layout.v_template')

@section('title', 'Student')

@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>NIS</th>
            <th>Name</th>
            <th>Grade</th>
            <th>Subject</th>
            <th>Gender</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($student as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->grade_name }}</td>
            <td>{{ $s->subject_name }}</td>
            <td>{{ $s->gender }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection