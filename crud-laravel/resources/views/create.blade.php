@extends('master')
@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                {{-- <h5 class="card-title">Title</h5> --}}
                <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="my-input">Name</label>
                        <input id="my-input" class="form-control" placeholder="Please enter a name"
                            value="{{ old('student_name') }}" type="text" name="student_name">
                    </div>
                    <div class="form-group mt-3">
                        <label for="my-input">Email</label>
                        <input id="my-input" class="form-control" placeholder="Please enter a email"
                            value="{{ old('student_email') }}" type="email" name="student_email">
                    </div>
                    <div class="form-group mt-3">
                        <label for="my-input">Gender</label>
                        <select name="student_gender" id="" class="form-control">
                            <option value="">Please Select Gender!!!</option>
                            <option value="Male">Male</option>
                            <option value="FeMale">FeMale</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="my-input">Image</label>
                        <input id="my-input" class="form-control" type="file" name="student_image">
                    </div>
                    <div class="form-group mt-3 text-center ">
                        <button type="submit" class="btn btn-primary col-1 ">Create</button>
                        {{-- <input type="submit" class="btn btn-primary col-1 " value="Add"> --}}
                        <button type="reset" class="btn btn-danger col-1">Reset</button>
                        <a href="{{ route('students.index') }}" class="btn btn-success col-1">List</a>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
