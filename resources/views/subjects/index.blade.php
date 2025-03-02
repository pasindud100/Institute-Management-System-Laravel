@extends('app')
@include('includes.header')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Subjects</h1>
        <a href="{{ route('subjects.create') }}" class="btn btn-success">Add New Subject</a>
    </div>
    <hr>
    <table class="table table-bordered table-striped mt-5">
        <thead>
            <tr>
                <td>Id</td>
                <td>Subject Name</td>
                <td>Credit Hours</td>
                <td class="text-center">Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $subject->sub_id }}</td>
                    <td>{{ $subject->sub_name }}</td>
                    <td>{{ $subject->credit_hours }}</td>
                    <td class="d-flex justify-content-center gap-2">
                        <p> <a href="{{ route('subjects.edit', $subject->sub_id) }}" class="btn btn-sm btn-primary">Edit</a>
                        </p>
                        <form action="{{ route('subjects.destroy', $subject->sub_id) }}" method="POST">
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
