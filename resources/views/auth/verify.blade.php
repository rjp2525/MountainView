@extends('layouts.auth')

@section('title', 'Please Verify Your Email')

@section('description', 'Account requires email verification.')

@section('breadcrumb_title', 'Verify Email')

@section('breadcrumb_active', 'Verification Required')

@section('content')
    <section class="auth-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-title text-center">Account Email Verification Required</div>
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">A fresh verification link has been sent to your email address.</div>
                            @endif
                            Before proceeding, please check your email for a verification link that was sent when the account was registered. If you did not receive the email, please <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">@csrf <button class="btn btn-link p-0 m-0 align-baseline">click here to request another</button>.</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
