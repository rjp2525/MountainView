@extends('layouts.portal')

@section('title', 'Dashboard')

@section('content')
<div class="alert alert-danger no-border-radius text-center" role="alert">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                    <div class="dashboard-card-amount overdue text-center">$425.00</div>
                    <div class="dashboard-amount-alert overdue text-center">Overdue</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">Invoices</div>
                    <div class="dashboard-card-amount text-center">5</div>
                    <div class="dashboard-amount-alert overdue text-center">2 Unpaid</div>
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
                <div class="card-header card-header-large">
                    <h4 class="card-header-title">Recent Invoices</h4>
                </div>
                <div class="list-group list-group-flush list-group-align-items-center">
                    <div href="#" class="list-group-item list-group-item-action d-flex">
                        <div class="list-group-icon">
                            <span class="icon-rounded-circle bg-orange">
                                <i class="fas fa-exclamation"></i>
                            </span>
                        </div>
                        <div class="list-group-title">
                            <div class="flex">
                                <strong>Invoice #20008-37963</strong> <span class="badge badge-warning d-sm-none d-md-block">PAYMENT DUE</span>
                            </div>
                            <small class="text-muted d-sm-none d-md-block">2 Main St serviced on January 8, 2020</small>
                        </div>
                        <div class="amount d-sm-none d-md-block">$75.00</div>
                        <div class="icon-view">
                            <a href="#" class="btn btn-warning btn-sm">
                                View Invoice
                            </a>
                        </div>
                    </div>
                </div>
                <div class="list-group list-group-flush list-group-align-items-center">
                    <div href="#" class="list-group-item list-group-item-action d-flex">
                        <div class="list-group-icon">
                            <span class="icon-rounded-circle bg-red">
                                <i class="fas fa-times"></i>
                            </span>
                        </div>
                        <div class="list-group-title">
                            <div class="flex">
                                <strong>Invoice #19344-35474</strong> <span class="badge badge-danger d-sm-none d-md-block">{{ \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse('12-10-2019')) }} DAYS OVERDUE</span>
                            </div>
                            <small class="text-muted d-sm-none d-md-block">2 Main St serviced on December 10, 2019</small>
                        </div>
                        <div class="amount d-sm-none d-md-block">$350.00</div>
                        <div class="icon-view">
                            <a href="#" class="btn btn-danger btn-sm">
                                View Invoice
                            </a>
                        </div>
                    </div>
                </div>
                <div class="list-group list-group-flush list-group-align-items-center">
                    <div href="#" class="list-group-item list-group-item-action d-flex">
                        <div class="list-group-icon">
                            <span class="icon-rounded-circle bg-green">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                        <div class="list-group-title">
                            <div class="flex">
                                <strong>Invoice #19310-40983</strong> <span class="badge badge-success d-sm-none d-md-block">PAID</span>
                            </div>
                            <small class="text-muted d-sm-none d-md-block">2 Main St serviced on November 6, 2019</small>
                        </div>
                        <div class="amount d-sm-none d-md-block">$120.00</div>
                        <div class="icon-view">
                            <a href="#" class="btn btn-success btn-sm">
                                View Invoice
                            </a>
                        </div>
                    </div>
                </div>
                <div class="list-group list-group-flush list-group-align-items-center">
                    <div href="#" class="list-group-item list-group-item-action d-flex">
                        <div class="list-group-icon">
                            <span class="icon-rounded-circle bg-green">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                        <div class="list-group-title">
                            <div class="flex">
                                <strong>Invoice #19302-56082</strong> <span class="badge badge-success d-sm-none d-md-block">PAID</span>
                            </div>
                            <small class="text-muted d-sm-none d-md-block">2 Main St serviced on October 29, 2019</small>
                        </div>
                        <div class="amount d-sm-none d-md-block">$120.00</div>
                        <div class="icon-view">
                            <a href="#" class="btn btn-success btn-sm">
                                View Invoice
                            </a>
                        </div>
                    </div>
                </div>
                <div class="list-group list-group-flush list-group-align-items-center">
                    <div href="#" class="list-group-item list-group-item-action d-flex">
                        <div class="list-group-icon">
                            <span class="icon-rounded-circle bg-green">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                        <div class="list-group-title">
                            <div class="flex">
                                <strong>Invoice #19265-74480</strong> <span class="badge badge-success d-sm-none d-md-block">PAID</span>
                            </div>
                            <small class="text-muted d-sm-none d-md-block">2 Main St serviced on September 22, 2019</small>
                        </div>
                        <div class="amount d-sm-none d-md-block">$75.00</div>
                        <div class="icon-view">
                            <a href="#" class="btn btn-success btn-sm">
                                View Invoice
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <address-list-widget></address-list-widget>
        </div>
    </div>
</div>
@endsection
