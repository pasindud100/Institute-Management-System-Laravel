@extends('app')

@include('includes.header')

@section('content')
    <div class="container" style="margin-top: 100px">
        {{-- welcome msg --}}
        <div class="text-center mb-5">
            <h1 class="fw-bold text-primary">Welcome to the SVD Institutes Admin Panel</h1>
            <p class="fs-5 text-secondary">Manage students, courses, exams, and more with ease.</p>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow-lg border-primary">
                    <div class="card-body text-center">
                        <h3 class="text-primary fw-bold">Student Management</h3>
                        <p class="fs-5 text-muted">Manage student records, enrollment, and progress.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg border-success">
                    <div class="card-body text-center">
                        <h3 class="text-success fw-bold">Course Management</h3>
                        <p class="fs-5 text-muted">Update courses, manage subjects, and assign instructors.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg border-danger">
                    <div class="card-body text-center">
                        <h3 class="text-danger fw-bold">Exam Management</h3>
                        <p class="fs-5 text-muted">Schedule exams, track results, and issue reports.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center my-5">
            <h3 class="fw-bold text-dark">Start Managing the SVD Instituts Today!</h3>
            <p class="fs-5 text-muted">Keep track of students, courses, and exams effortlessly.</p>
        </div>
    </div>
    <div>
        @include('includes.footerForHome')
    </div>
@endsection
