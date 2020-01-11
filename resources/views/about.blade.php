<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>About Us - Mountain View Landscaping</title>
    <meta name="description" content="Mountain View Landscaping can be your partner for beautiful landscaping and year-round grounds management for your residential or commercial property.">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />

    <!-- Social Media Sharing -->
    <meta property="og:site_name" content="Mountain View Landscaping, LLC">
    <meta property="og:title" content="Privacy Policy - Mountain View Landscaping">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mountainviewlandscapers.com/privacy">
    <meta property="og:image" content="https://mountainviewlandscapers.com/img/social_share_card.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="Privacy Policy - Mountain View Landscaping">
    <meta property="twitter:description" content="When you visit our website, mobile application, and use our services, you trust us with your personal information. We take your privacy very seriously. In this privacy policy, we seek to explain to you in the clearest way possible what information we collect, how we use it and what rights you have in relation to it.">
    <meta property="twitter:url" content="https://mountainviewlandscapers.com/privacy">
    <meta property="twitter:image" content="https://mountainviewlandscapers.com/img/social_share_card.png">

    <!-- CSS -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/bb0ff28fce.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/homepage.css') }}">
</head>
<body id="top">
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
                                    <a href="{{ route('static.about') }}" class="nav-link single">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.services') }}" class="nav-link single">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.homepage') }}#work" class="nav-link single">Our Work</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('static.homepage') }}#contact" class="nav-link single">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link link-color" data-toggle="modal" data-target="#loginsoon">My Account</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="page-header-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h1>About Us</h1>
                </div>
                <div class="col-md-4 col-sm-12 text-right bcrumbs">
                    <div class="breadcrumbs">
                        <a href="{{ route('static.homepage') }}">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <span class="current">About</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row section-header">
                <div class="col-12 text-center">
                    <h3>About Mountain View Landscaping</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>From small landscaping projects to large custom home sites and commercial properties, we design, install, and maintain the landscape of your dreams! Mountain View Landscaping provides landscaping services for both residential and commercial properties in and around the Rockingham and Merrimack County area including Fremont, Epping, Manchester, Portsmouth, Derry and beyond. We have the professional, experienced and skilled team to manage your entire landscaping project. Whether it's a brand new landscape design or renovation, we're here to design, build and maintenance for the landscape of your dreams!</p>
                    <p>Mountain View Landscaping is committed to providing the absolute highest quality landscaping services. From the initial landscaping consultation and site review, through the design, bid, review, and ultimately the contract, installation, and project completion, it is our goal to give every client superior customer service. No matter how big or small the project, every client is important to us.</p>
                    <p>The quality of our installations are the focus of every employee. We believe the difference is in the details. Satisfied customers and superior installation and maintenance are integral to the reputation Mountain View Landscaping is striving to achieve.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-us-page-image">
                        <img src="img/about_page_image.png" alt="Mountain View Landscaping">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact noheading" id="contact">
        <div class="container">
            <div class="row contact-info">
                <div class="col-lg-3">
                    <div class="contact-item">
                        <h6>Office Address</h6>
                        <p>2 Main Street<br>Fremont, New Hampshire<br>03044-3319</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-item">
                        <h6>Phone Number</h6>
                        <p><a href="tel:+1-603-706-0455">+1 (603) 706-0455</a> </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-item">
                        <h6>Email Address</h6>
                        <p><a href="mailto:contact@mtnview.email">contact@mtnview.email</a></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-item">
                        <h6>Office Hours</h6>
                        <p>Monday-Friday: <strong>8:00 AM - 5:00 PM</strong><br>
                        Saturday-Sunday: <strong>CLOSED</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">&copy; 2020 Mountain View Landscaping LLC, All Rights Reserved.</div>
                <div class="col-lg-6 col-md-12 links">
                    <a href="{{ route('static.privacy') }}">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="https://instagram.com/mtnviewlandscaping">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/MountainViewLandscapers">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="loginsoon" tabindex="-1" role="dialog" aria-labelledby="loginsoonLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Portal Coming Soon!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>We aren't quite finished with this feature yet. The Mountain View customer portal is expected to go live by March of 2020.</p>
                    <p>We're working diligently this winter to bring you some brand new and incredible online options. Very soon you'll be able to view your service history, pay invoices online, renew your contract, request service changes and much more! In the mean time, if you need to contact us then you can <a class="text-success" href="mailto:contact@mtnview.email">email us</a>, submit the contact form at the bottom of the page or call us at <a class="text-success" href="tel:603-706-0455">(603) 706-0455</a>. We will get back to you as soon as possible during normal business hours (Monday through Friday 8:00 AM to 5:00 PM).</p>
                    <p>Thank you again for your continued support and patience in this exciting year of growth!</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120534481-2"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-120534481-2');</script>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>
