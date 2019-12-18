<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>Mountain View Landscaping</title>
    <!-- TODO: Write a 160 character description that captures the users attention -->
    <meta name="description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />

    <!-- Social Media Sharing -->
    <meta property="og:site_name" content="Mountain View Landscaping, LLC">
    <meta property="og:title" content="Mountain View Landscaping serving Southern NH">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mountainviewlandscapers.com">
    <meta property="og:image" content="https://mountainviewlandscapers.com/img/social_share_card.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="Mountain View Landscaping serving Southern NH residents">
    <meta property="twitter:description" content="We aim to provide the absolute highest level of quality in every landscaping service that we offer to customers.">
    <meta property="twitter:url" content="https://mountainviewlandscapers.com">
    <meta property="twitter:image" content="https://mountainviewlandscapers.com/img/social_share_card.png">

    <!-- CSS -->
    <script src="https://kit.fontawesome.com/bb0ff28fce.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/homepage.css') }}">
</head>
<body id="top">
    <header class="main-header sticky-header header-with-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light rounded">
                        <a href="{{ route('static.homepage') }}" class="navbar-brand logo d-flex mr-auto">
                            <img src="img/logo_nav_white.png" alt="Mountain View Landscaping Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="navbar-collapse collapse w-100" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="#top" class="nav-link single">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about" class="nav-link single">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#services" class="nav-link single">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#work" class="nav-link single">Our Work</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact" class="nav-link single">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#login" class="nav-link link-color">My Account</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="banner" id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item item-bg active">
                    <img class="d-block banner-background-image" src="img/homepage_banner_bg.png" alt="Banner background image">
                    <div class="carousel-caption banner-slider-inner d-flex h-100">
                        <div class="carousel-content container">
                            <div class="banner-inner">
                                <h1 class="b-text">Your local top notch landscaper.</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                <a href="#" class="btn-md button-theme">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about" name="about">
        <div class="container about-section">
            <div class="row section-header">
                <div class="col-12 text-center">
                    <h3>About us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 text-center">
                            <div class="single-image">
                                <img src="img/logo-about-us.png" alt="Mountain View Landscaping Logo">
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services" id="services" name="services">
        <div class="container">
            <div class="row section-header">
                <div class="col-12 text-center">
                    <h3>Services We Offer</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center spost">
                    <div class="service-post">
                        <span class="fas fa-tractor service-icon"></span>
                        <h5 class="service-title">Grass Cutting</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center spost">
                    <div class="service-post">
                        <span class="fas fa-cut service-icon"></span>
                        <h5 class="service-title">Hedge Trimming</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center spost">
                    <div class="service-post">
                        <span class="fas fa-tree service-icon"></span>
                        <h5 class="service-title">Mulch Installation</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center spost">
                    <div class="service-post">
                        <span class="fab fa-canadian-maple-leaf service-icon"></span>
                        <h5 class="service-title">Seasonal Clean-ups</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        <div class="spacer"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center spost">
                    <div class="service-post">
                        <span class="fas fa-tractor service-icon"></span>
                        <h5 class="service-title">Grass Cutting</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center spost">
                    <div class="service-post">
                        <span class="fas fa-cut service-icon"></span>
                        <h5 class="service-title">Hedge Trimming</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center spost">
                    <div class="service-post">
                        <span class="fas fa-tree service-icon"></span>
                        <h5 class="service-title">Mulch Installation</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center spost">
                    <div class="service-post">
                        <span class="fab fa-canadian-maple-leaf service-icon"></span>
                        <h5 class="service-title">Seasonal Clean-ups</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        <div class="spacer"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cta-inner clearfix">
                        <div class="cta-text">
                            <h5 class="cta-title">We can help bring your lawn and landscape projects to life!</h5>
                        </div>
                        <div class="cta-button">
                            <a href="#" class="btn btn-bordered">Request a quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>
