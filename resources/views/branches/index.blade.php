@extends('app')
@include('includes.header')

@section('content')
    <div class="d-flex align-items-center justify-content-between ">
        <h1>Branches</h1>
        <a href="{{ route('branches.create') }}" class="btn btn-success">Add New Branch</a>
    </div>
    <hr>

    <table class="table table-bordered table-striped mt-5">
        <thead>
            <tr>
                <td>Id</td>
                <td>Branch Name</td>
                <td>Address</td>
                <td>Institute</td>
                <td class="text-center">Actions</td>
            </tr>
        </thead>
        <tbody>

            @foreach ($branches as $branch)
                <tr>
                    <td>{{ $branch->branch_id }}</td>
                    <td>{{ $branch->branch_name }}</td>
                    <td>{{ $branch->address }}</td>
                    <td>{{ $branch->institute->inst_name }}</td>

                    <td class="d-flex gap-1 justify-content-center">
                        <p> <a href="{{ route('branches.edit', $branch->branch_id) }}" class="btn btn-sm btn-primary">Edit</a>
                        </p>
                        <form action="{{ route('branches.destroy', $branch->branch_id) }}" method="POST"
                            style="display: inline-black;">
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
