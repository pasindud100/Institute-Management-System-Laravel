@extends('app')
@include('includes.header')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-success">Add New Course</a>
    </div>
    <hr>
    <table class="table table-striped table-bordered mt-5">
        <thead>
            <tr>
                <th>Id</th>
                <th>Course Name</th>
                <th>Duration</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->course_id }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->duration }}</td>

                    <td class="d-flex justify-content-center gap-2">
                        <p> <a href="{{ route('courses.edit', $course->course_id) }}" class="btn btn-sm btn-primary">Edit</a>
                        </p>
                        <form action="{{ route('courses.destroy', $course->course_id) }}" method="POST">
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
