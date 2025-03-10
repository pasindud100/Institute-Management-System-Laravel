@extends('auth.auth')

@section('style')
    <style>
        body {
            height: 100%;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-signin {
            padding: 30px 80px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"],
        .form-signin input[type="password"] {
            border-radius: 8px;
        }

        .btn-primary {
            background: #007bff;
            border: none;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .text-danger {
            font-size: 14px;
        }

        .alert {
            font-size: 14px;
        }
    </style>
@endsection

@section('content')
    <main class="form-signin">
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="text-center">
                <h1 class="h2 mb-4 fw-bold">Sign in</h1>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {{-- <div class="form-check mb-3">
                <input type="checkbox" name="rememberme" class="form-check-input" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Remember me</label>
            </div> --}}

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

            <div class="text-center mt-3">
                <p> Don’t have an account? <a href="{{ route('register') }}"
                        class="text-decoration-none text-muted">Signup</a>
                </p>
            </div>
        </form>
    </main>
@endsection
