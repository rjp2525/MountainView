@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('description', 'Forgot your Mountain View Landscaping account password? Request a new password here.')

@section('breadcrumb_title', 'Forgot Password')

@section('breadcrumb_active', 'Forgot')

@section('content')
    <section class="auth-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-title text-center">Request a new password</div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email Address"
                                            autofocus
                                            value="{{ old('email') }}"
                                            required
                                            autocomplete="email"
                                        />
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-md btn-success btn-block">
                                            Request Password Reset Link
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <p><a href="{{ route('login') }}">Sign in</a> or <a href="{{ route('register') }}">create a new account</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
