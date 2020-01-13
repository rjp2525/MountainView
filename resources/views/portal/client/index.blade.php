@extends('layouts.portal')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <strong>Payment Due:</strong> Your account balance is more than 14 days past due. Please make a payment to avoid service interruption.
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">Account Balance</div>
                    <div class="dashboard-card-amount overdue text-center">$285.00</div>
                    <div class="dashboard-amount-alert overdue text-center">Overdue</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">Invoices</div>
                    <div class="dashboard-card-amount text-center">4</div>
                    <div class="dashboard-amount-alert overdue text-center">1 Unpaid</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">Properties</div>
                    <div class="dashboard-card-amount text-center">1</div>
                    <div class="dashboard-amount-alert text-center">Primary</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">Estimates</div>
                    <div class="dashboard-card-amount text-center">0</div>
                    <div class="dashboard-amount-alert text-center">None</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Welcome back, {{ Auth::user()->first_name }}!</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
