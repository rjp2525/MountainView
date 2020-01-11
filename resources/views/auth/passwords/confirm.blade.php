@extends('layouts.auth')

@section('title', 'Password Required')

@section('description', 'Please enter your password before continuing.')

@section('breadcrumb_title', 'Password Required')

@section('breadcrumb_active', 'Authorize')

@section('content')
    <section class="auth-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-title text-center">Password Verification Required</div>
                            <p class="text-center">Please enter your password before proceeding.</p>
                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input
                                            type="password"
                                            id="password"
                                            name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password"
                                            required
                                            autocomplete="current-password"
                                        />
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-md btn-success btn-block">
                                            Continue
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group-row">
                                    <div class="col-md-12 text-center">
                                        <p><a href="{{ route('password.request') }}">Forgot Password</a></p>
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
