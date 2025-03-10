@extends('app')
@include('includes.header')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Students</h1>
        <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
    </div>
    <hr>

    <table class="table table-bordered table-striped mt-5">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->stu_id }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->contact_number }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->address }}</td>
                    <td class="d-flex justify-content-center gap-2">
                        <p> <a href="{{ route('students.edit', $student->stu_id) }}" class="btn btn-sm btn-primary">Edit</a>
                        </p>
                        <form action="{{ route('students.destroy', $student->stu_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
