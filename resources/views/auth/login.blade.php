@extends('layouts.auth')

@section('title', 'Login')

@section('description', 'Sign in to your Mountain View Landscaping customer portal account to access your account information, view invoices, service requests and pay your bill.')

@section('breadcrumb_title', 'Sign In')

@section('breadcrumb_active', 'Login')

@section('content')
    <section class="auth-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-title text-center">Sign in to your account</div>
                            <form method="POST" action={{ route('login') }}>
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email"
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
                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password"
                                            autofocus
                                            required
                                            autocomplete="current-password"
                                        />
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12 text-center">
                                        <div class="form-check">
                                            <input
                                                type="checkbox"
                                                class="form-check-input"
                                                id="remember"
                                                name="remember"
                                                value="1"
                                                {{ old('remember') ? 'checked' : '' }}
                                            />
                                            <label for="remember" class="form-check-label">
                                                Remember me on this device
                                            </label>
                                        </div>
                                        @error('privacy_policy')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-md btn-success btn-block">
                                            Login
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <p><a href="{{ route('password.request') }}">Forgot password</a> or need to <a href="{{ route('register') }}">create a new account</a>?</p>
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
