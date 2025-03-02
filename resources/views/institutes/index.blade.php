@extends('app')
@include('includes.header')

@section('content')
    <div class="">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Institutes</h1>
            <a href="{{ route('institutes.create') }}" class="btn btn-success">Add New Institute</a>
        </div>
        <hr>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Contact Number</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($institutes as $institute)
                    <tr>
                        <td>{{ $institute->inst_id }}</td>
                        <td>{{ $institute->inst_name }}</td>
                        <td>{{ $institute->location }}</td>
                        <td>{{ $institute->contact_number }}</td>
                        <td class="text-center">
                            <a href="{{ route('institutes.edit', $institute->inst_id) }}"
                                class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('institutes.destroy', $institute->inst_id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
