@extends('layouts.auth')

@section('title', 'Create Account')

@section('description', 'Register an account to manage your Mountain View Landscaping invoices, quotes, service requests and pay your bill online.')

@section('breadcrumb_title', 'Create Account')

@section('breadcrumb_active', 'Register')

@section('content')
    <section class="auth-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-title text-center">Create a new account</div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input
                                            type="text"
                                            name="first_name"
                                            class="form-control @error('first_name') is-invalid @enderror"
                                            placeholder="First Name"
                                            autofocus
                                            value="{{ old('first_name') }}"
                                            required
                                            autocomplete="first_name"
                                        />
                                        @error('first_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input
                                            type="text"
                                            name="last_name"
                                            class="form-control @error('last_name') is-invalid @enderror"
                                            placeholder="Last Name"
                                            value="{{ old('last_name') }}"
                                            required
                                            autocomplete="last_name"
                                        />
                                        @error('last_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input
                                            type="text"
                                            name="company"
                                            class="form-control @error('company') is-invalid @enderror"
                                            placeholder="Business Name (Commercial)"
                                            value="{{ old('company') }}"
                                            autocomplete="company"
                                        />
                                        @error('company')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input
                                            type="text"
                                            name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Primary Phone"
                                            value="{{ old('phone') }}"
                                            required
                                            autocomplete="phone"
                                        />
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email"
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
                                            required
                                            autocomplete="password"
                                        />
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input
                                            type="password"
                                            name="password_confirmation"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            placeholder="Confirm Password"
                                            required
                                        />
                                        @error('password_confirmation')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input
                                            type="text"
                                            name="street"
                                            class="form-control @error('street') is-invalid @enderror"
                                            placeholder="Street Address"
                                            value="{{ old('street') }}"
                                            required
                                            autocomplete="street"
                                        />
                                        @error('street')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <input
                                            type="text"
                                            name="city"
                                            class="form-control @error('city') is-invalid @enderror"
                                            placeholder="City"
                                            value="{{ old('city') }}"
                                            required
                                            autocomplete="city"
                                        />
                                        @error('city')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <input
                                            type="text"
                                            name="state"
                                            class="form-control @error('state') is-invalid @enderror"
                                            placeholder="State"
                                            value="{{ old('state') }}"
                                            required
                                            autocomplete="state"
                                            maxlength="2"
                                        />
                                        @error('state')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input
                                            type="text"
                                            name="zip"
                                            class="form-control @error('zip') is-invalid @enderror"
                                            placeholder="Zip Code"
                                            value="{{ old('zip') }}"
                                            required
                                            autocomplete="zip"
                                            maxlength="5"
                                        />
                                        @error('zip')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2 col-sm-12">
                                        <div class="form-check">
                                            <input
                                                type="checkbox"
                                                class="form-check-input @error('terms_of_service') is-invalid @enderror"
                                                id="terms_of_service"
                                                name="terms_of_service"
                                                value="1"
                                            />
                                            <label for="terms_of_service" class="form-check-label">
                                                I have read and accept the <a href="{{ url('/tos') }}">Terms of Service</a>
                                            </label>
                                        </div>
                                        @error('terms_of_service')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2 col-sm-12">
                                        <div class="form-check">
                                            <input
                                                type="checkbox"
                                                class="form-check-input @error('privacy_policy') is-invalid @enderror"
                                                id="privacy_policy"
                                                name="privacy_policy"
                                                value="1"
                                            />
                                            <label for="privacy_policy" class="form-check-label">
                                                I have read and accept the <a href="{{ route('static.privacy') }}">Privacy Policy</a>
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
                                            Create Account
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12 text-center">
                                        <p>Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
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
