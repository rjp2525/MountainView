<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
    <a class="navbar-brand" href="{{ route('portal.index') }}">Mountain View</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-right ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('portal.index') }}">Overview <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Invoices</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Estimates</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="user-account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="user-account-dropdown">
                    <a class="dropdown-item" href="#">Properties</a>
                    <a class="dropdown-item" href="#">Billing</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
