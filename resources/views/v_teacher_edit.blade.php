@extends('layout.v_template')

@section('title', 'Edit Teacher')

@section('content')

<form action="/teacher/edit/process/{{ $teacher->id }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>NIP</label>
                    <input name="nip" class="form-control" value="{{ $teacher->nip }}" readonly>
                    <div class="text-danger">
                        @error('nip')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" class="form-control" value="{{ $teacher->name }}">
                    <div class=" text-danger">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input name="subject" class="form-control" value="{{ $teacher->subject }}">
                    <div class=" text-danger">
                        @error('subject')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <input name="gender" class="form-control" value="{{ $teacher->gender }}">
                    <div class=" text-danger">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <!-- <div class="col-sm 12"> -->
                <!-- <div class="com-sm-4"> -->

                <!-- </div> -->
                <!-- <div class="col-sm-8"> -->
                <div class="form-group">
                    <label>Photo</label>
                    <img src="{{ url('photo/' . $teacher->photo) }}" width="200px">
                    <input type="file" name="photo" class="form-control" value="{{ $teacher->subject }}">
                    <div class=" text-danger">
                        @error('photo')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <!-- </div> -->
                <!-- </div> -->
                <!-- <div class="col-sm 12"> -->
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Save</button>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

</form>

@endsection