@extends('layout.v_template')

@section('title', 'Add Teacher')

@section('content')

<form action="/teacher/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>NIP</label>
                    <input name="nip" class="form-control" value="{{ old('nip') }}">
                    <div class="text-danger">
                        @error('nip')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" class="form-control" value="{{ old('name') }}">
                    <div class=" text-danger">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input name="subject" class="form-control" value="{{ old('subject') }}">
                    <div class=" text-danger">
                        @error('subject')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <input name="gender" class="form-control" value="{{ old('gender') }}">
                    <div class=" text-danger">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="photo" class="form-control" value="{{ old('photo') }}">
                    <div class=" text-danger">
                        @error('photo')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>

</form>

@endsection