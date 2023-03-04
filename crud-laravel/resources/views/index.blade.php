@extends('master')
@section('content')
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <table class="table table-striped table-inverse table-responsive text-center">
            <thead class="thead-inverse">
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Gender</th>
                    <th><a href="{{ route('students.create') }}" class="btn btn-success">Create</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->student_name }}</td>
                        <td>{{ $item->student_email }}</td>
                        <td><img width="50" src="{{ asset('images/' . $item->student_image) }}" alt=""></td>
                        <td>{{ $item->student_gender }}</td>
                        <td>
                            <form action="{{ route('students.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('students.show',$item->id) }}" class="btn btn-warning">View</a>
                                <button class="btn btn-danger">Delete</button>
                                <a href="{{ route('students.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
@endsection
