<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') :: Mountain View Landscaping</title>
    <meta name="description" content="@yield('description')">

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />

    <meta property="og:site_name" content="Mountain View Landscaping, LLC">
    <meta property="og:title" content="@yield('title') - Mountain View Landscaping">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="https://mountainviewlandscapers.com/img/social_share_card.png">

    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="@yield('title') - Mountain View Landscaping">
    <meta property="twitter:description" content="@yield('description')">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:image" content="https://mountainviewlandscapers.com/img/social_share_card.png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <script src="https://kit.fontawesome.com/bb0ff28fce.js" crossorigin="anonymous" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/homepage.css') }}">
</head>
<body id="app">
    <header class="main-header header-with-top dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-dark rounded">
                        <a href="{{ route('static.homepage') }}" class="navbar-brand logo d-flex mr-auto">Mountain View</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="navbar-collapse collapse w-100" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="{{ route('static.homepage') }}" class="nav-link single">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.homepage') }}" class="nav-link single">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.services') }}" class="nav-link single">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.homepage') }}" class="nav-link single">Our Work</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.homepage') }}" class="nav-link single">Contact</a>
                                </li>
                                @guest
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link link-color">My Account</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="{{ route('portal.index') }}" class="nav-link link-color">My Account</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="page-header-breadcrumbs auth-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h1>@yield('breadcrumb_title')</h1>
                </div>
                <div class="col-md-4 col-sm-12 text-right bcrumbs">
                    <div class="breadcrumbs">
                        <a href="{{ route('static.homepage') }}">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <span class="current">@yield('breadcrumb_active')</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>

                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>-->

    @yield('content')

    @include('layouts.auth-footer')

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120534481-2"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-120534481-2');</script>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>
